<div>
    @push('link')
        <link href="/admin/src/assets/css/dark/apps/invoice-preview.css" rel="stylesheet" type="text/css"/>
    @endpush
    <div class="row invoice layout-top-spacing layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="doc-container">

                <div class="row">

                    <div class="col-xl-9">

                        <div class="invoice-container">
                            <div class="invoice-inbox">

                                <div id="ct" class="">

                                    <div class="invoice-00001">
                                        <div class="content-section">

                                            <div class="inv--head-section inv--detail-section">

                                                <div class="row">

                                                    <div class="col-sm-6 col-12 mr-auto">
                                                        <h6>اطلاعات خریدار :</h6>

                                                        <p class="inv-email-address">نام کاربر: {{$orderDetails->user->name}}</p>
                                                        <p class="inv-email-address"> ایمیل کاربر: {{$orderDetails->user->email}}</p>
                                                        <p class="inv-email-address"> تلفن کاربر: {{$orderDetails->user->mobile}}</p>
                                                    </div>

                                                    <div class="col-sm-6 text-sm-end">
                                                        <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4" wire:ignore><span
                                                                class="inv-title">شماره سفارش : </span> <span
                                                                class="inv-number">#{{$orderDetails->order_number}}</span>
                                                        </p>
                                                        <p class="inv-created-date mt-sm-5 mt-3">
                                                            <span class="inv-title">
                                                                تاریخ ثبت سفارش :
                                                            </span>
                                                            <span class="inv-date">
                                                                {{jalali($orderDetails->created_at)->format('%d %B %Y | H:i')}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">

                                                <div class="row">

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                        <p class="inv-to">جزییات پرداخت </p>
                                                    </div>


                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                        <p class="inv-customer-name">
                                                            شماره کارت:
                                                            {{$orderDetails->payment->cardNumber}}
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            شماره مرجع :
                                                            {{$orderDetails->payment->refNumber}}

                                                        </p>
                                                        <p class="inv-email-address text-danger">درگاه:
                                                            {{$orderDetails->paymentMethod->name}}
                                                        </p>
                                                        <p class="inv-email-address badge text-white badge-{{$orderDetails->statusPaymentColor}}">
                                                            وضعیت پرداخت :
                                                            {{$orderDetails->payment->status=='pending' ? 'درحال پردازش' : ''}}
                                                            {{$orderDetails->payment->status=='completed' ? 'پرداخت شده' : ''}}
                                                            {{$orderDetails->payment->status=='cancelled' ? 'لغو شده' : ''}}
                                                        </p>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="inv--product-table-section">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">تصویر محصول</th>
                                                            <th scope="col">نام محصول</th>
                                                            <th class="text-end" scope="col">قیمت محصول</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($orderDetails->orderItems as $item)
                                                            <tr>
                                                                <td>{{$loop->index+1}}</td>
                                                                <td>
                                                                    <img class="rounded-3" src="/products/{{$item->product->id}}/photo/{{@$item->product->coverImage->path}}" style="width: 80px">
                                                                </td>
                                                                <td>{{$item->product->name}}</td>
                                                                <td class="text-end">{{number_format($item->price)}}</td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="inv--total-amounts">

                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="text-sm-end">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7 grand-total-title mt-3">
                                                                    <h4 class="">مبلغ نهایی : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount mt-3">
                                                                    <h4 class="">{{number_format($orderDetails->amount)}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
