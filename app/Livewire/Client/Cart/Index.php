<?php

namespace App\Livewire\Client\Cart;

use App\Contracts\PaymentGateWayInterface;
use App\Models\Cart;
use App\Models\Coupons;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public $cartItems = [];
    public $invoice = [];
    public $discountCodeAmount = 0;
    public $totalAmount = 0;
    public $totalOriginalPrice = 0;
    public $showDiscountCode = false;
    public $latestProducts;
    public $cart = 0;

    #[On('add-to-cart')]
    public function mount()
    {
        $latestProducts = Product::query()
            ->select('id', 'name', 'title', 'tag', 'price', 'meeting_time', 'course_time', 'p_code')
            ->with('coverImage', 'seo')
            ->get();
        $this->latestProducts = $latestProducts;

        if (auth()->check()) {
            $this->cart = Cart::query()->where('user_id', auth()->id())->count();
        }

        $this->seoConfig();

        $invoice = Session::get('invoiceFromCart', []);
        $this->totalOriginalPrice = $invoice['totalOriginalPrice'] ?? 0;

        $this->totalAmountForPayment($this->totalOriginalPrice, $this->discountCodeAmount);
    }
    public function totalAmountForPayment($totalOriginalPrice, $discountCodeAmount): void
    {
        $this->totalAmount = $totalOriginalPrice - $discountCodeAmount;
    }
    public function getUserCart()
    {
        if (auth()->check()) {
            $this->cart = Cart::query()->where('user_id', auth()->id())->count();
        }
    }

    public function deleteItem($cartItemId)
    {
        Cart::query()->where('id', $cartItemId)->delete();

        $this->cartItems = Cart::query()
            ->with('product:id,name,title,tag,price,course_time,meeting_time,description,p_code')
            ->where('user_id', auth()->id())
            ->get();

        $this->cart = $this->cartItems->count(); // مقدار جدید سبد خرید

        // ارسال رویداد به کامپوننت هدر برای کاهش مقدار
        $this->dispatch('remove-from-cart', $this->cart);

        $this->dispatch('success', 'آیتم با موفقیت از سبد خرید حذف شد.');
    }


    public function seoConfig()
    {
        $this->seo()
            ->setTitle('سبد خرید');
    }



    public function checkDiscountCode($formData): void
    {

        $validator = Validator::make($formData, [
            'code' => 'required|string|exists:coupons,code|min:4|max:6',

        ], [
            'code.required' => 'فیلد ضروری است.',
            'code.string' => 'فرمت اشتباه است !',
            'code.max' => 'حداکثر تعداد کاراکترها : 10',
            'code.min' => 'حداقل تعداد کاراکترها : 4',
            'code.exists' => 'کد تخفیف وارد شده معتبر نیست.',

        ]);
        $validator->validate();
        $this->resetValidation();


        $code = Coupons::query()->where('code', $formData['code'])->first();

        $this->applyDiscount($code);
    }

    public function applyDiscount($code)
    {

        if (!$code->is_active || (Carbon::parse($code->expires_at)->isPast())) {
            session()->flash('error', 'این کد تخفیف معتبر نیست یا منقضی شده است.');
            return;
        }
        if ($code->limit <= 0) {
            session()->flash('error', 'شرایط استفاده از این کد تخفیف برقرار نیست.');
            return;
        }
        $this->discountCodeAmount = $discount = $code->type == 'percent' ? ($this->totalOriginalPrice * $code->value) / 100 : $code->value;

        $this->totalAmountForPayment($this->totalOriginalPrice, $discount);

        $this->showDiscountCode = true;
        session()->flash('success', 'کد تخفیف شما با موفقیت اعمال شد.');

    }
    public function updateCart()
    {
        $this->cartItems = Cart::query()
            ->with('product:id,name,title,tag,price,course_time,meeting_time,description,p_code')
            ->where('user_id', auth()->id())
            ->get();

        $this->cart = $this->cartItems->count();
        $this->totalOriginalPrice = $this->cartItems->sum(fn($item) => $item->product->price);
        $this->totalAmountForPayment($this->totalOriginalPrice, $this->discountCodeAmount);

        Session::put('invoiceFromCart', [
            'totalProductCount' => $this->cart,
            'totalOriginalPrice' => $this->totalOriginalPrice,
        ]);
    }

    public function createOrder($orderNumber, $getPaymentMethodId)
    {
        return Order::query()->create([
            'amount' => $this->totalAmount,
            'order_number' => $orderNumber,
            'user_id' => Auth::id(),
            'payment_method_id' => $getPaymentMethodId
        ]);
    }

    public function createOrderItem($cartItems, $orderId)
    {
        foreach ($cartItems as $item) {
            $product = Product::query()->where('id', $item->product_id)->first();
            OrderItem::query()->create([
                'price' => $product->price,
                'order_id' => $orderId,
                'product_id' => $item->product_id,
            ]);
        }
    }

    public function createPayment($orderId, $orderNumber)
    {
        Payment::query()->create([
            'order_id' => $orderId,
            'user_id' => Auth::id(),
            'amount' => $this->totalAmount,
            'order_number' => $orderNumber,
        ]);
    }

    public function submitOrderBeforePayment($cartItems, $getPaymentMethodId, $orderNumber)
    {
        DB::transaction(function () use ($cartItems, $getPaymentMethodId, $orderNumber) {

            $order = $this->createOrder($orderNumber, $getPaymentMethodId);

            $this->createOrderItem($cartItems, $order->id);

            $this->createPayment($order->id, $orderNumber);

        });
    }

    public function submitOrder(PaymentGateWayInterface $paymentGateway)
    {
        $cartItems = Cart::query()->where('user_id', Auth::id())->get();
        $orderNumber = 'REF-' . Str::uuid()->toString();
        $this->submitOrderBeforePayment($cartItems, $paymentGateway->getPaymentMethodId(), $orderNumber);
        return $paymentGateway->request($this->totalAmount, $orderNumber);
    }

    public function render()
    {
        $this->updateCart();
        $this->cartItems = Cart::query()->with('product:id,name,title,tag,price,course_time,meeting_time,description,p_code')
            ->where('user_id', Auth::id())
            ->get()->map(function ($item) {
                $product = $item->product;
                //قیمت اصلی هر محصول
                $originalPrice = $product->price;
                $item->originalPrice = $originalPrice;
                return $item;
            });
        $this->invoice = [
            'totalProductCount' => $this->cartItems->count(),
            'totalOriginalPrice' => $this->cartItems->sum('originalPrice'),
        ];
        Session::put('invoiceFromCart', $this->invoice);
        return view('livewire.client.cart.index')->layout('layouts.client.app');
    }
}
