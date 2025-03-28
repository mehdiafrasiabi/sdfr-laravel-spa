<?php

namespace App\Livewire\Client\Cart;

use App\Models\Cart;
use App\Models\Product;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;
    public $latestProducts;
    public $cartItems = [];
    public $cart = 0;
    #[On('add-to-cart')]
    public function mount()
    {
        $latestProducts = Product::query()
            ->select('id', 'name','title','tag','price','meeting_time','course_time','p_code')
            ->with('coverImage','seo')
            ->get();
        $this->latestProducts = $latestProducts;

        if (auth()->check()) { // بررسی اینکه کاربر لاگین کرده است یا نه
            $this->cart = Cart::query()
                ->where('user_id', auth()->id())
                ->count();
        }
    }
    public function getUserCart()
    {
        if (auth()->check()) {
            $this->cart = Cart::query()
                ->where('user_id', auth()->id())
                ->count();
        }
    }

    public function deleteItem($cartItemId)
    {
        Cart::query()->where('id', $cartItemId)->delete();

        // بعد از حذف، لیست سبد خرید را مجدداً بارگذاری می‌کنیم.
        $this->cartItems = Cart::query()
            ->with('product:id,name,title,tag,price,course_time,meeting_time,description,p_code')
            ->where('user_id', auth()->id())
            ->get();

        $this->cart = $this->cartItems->count();

        $this->dispatch('success', 'با موفقیت از سبد خرید شما حذف گردید');
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('سبد خرید');
    }
      public function render()
    {
        $this->cartItems = Cart::query()->with('product:id,name,title,tag,price,course_time,meeting_time,description,p_code')
            ->where('user_id', Auth::id())
            ->get();

        return view('livewire.client.cart.index')->layout('layouts.client.app');
    }
}
