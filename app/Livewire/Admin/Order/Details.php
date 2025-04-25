<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Details extends Component
{
    use SEOTools;
    public $orderDetails;
    public $statusColor;

    public function mount(Order $order)
    {
       $orderDetails = $this->orderDetails = $order->load(
            ['orderItems.product:id,name,price,p_code',
                'orderItems.product.coverImage:id,path,product_id',
                'payment',
                'paymentMethod'
            ]
        );
        $parts = explode('-', $orderDetails->order_number);
        $orderDetails->order_number = $parts[2] ?? null;
        $orderDetails->statusPaymentColor= $this->getStatusColor($order->payment->status);
        $this->statusColor= $this->getStatusColor($orderDetails->status);

        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('جزییات سفارشات');
    }
    public function getStatusColor($status)
    {
        switch ($status) {
            case 'pending':
                return 'primary';
            case 'processing':
                return 'warning';
            case 'cancelled':
                return 'danger';
            case 'completed':
                return 'success';

        }
    }
    public function changeStatus(Order $order ,$value)
    {
        $validator = Validator::make(['status' => $value, 'id' => $order->id],
            [
                'id' => 'required|exists:orders,id',
                'status' => 'required|in:pending,processing,completed,canceled',
            ],
            [
                '*.required' => 'فیلد اجیاری است.',
                'status.in' => 'فرمت اشتباه است',
                'id.exists' => 'سفارش نامعتبر'
            ]
        );
        $validator->validate();
        $this->resetValidation();
        $order->update(['status' => $value]);
        $this->statusColor = $this->getStatusColor($value);
        $this->dispatch('success', 'با موفقیت ثبت شد');


    }
    public function render()
    {
        return view('livewire.admin.order.details')->layout('layouts.admin.app');
    }
}
