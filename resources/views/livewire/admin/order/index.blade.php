<div>
    <div class="widget-content widget-content-area br-8">
        <div id="invoice-list_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
            <div class="inv-list-top-section">
                <div class="row">
                    <div class="col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center">
                        <div class="dataTables_length" id="invoice-list_length"><label>Results : <select
                                    name="invoice-list_length" aria-controls="invoice-list" class="form-control">
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                </select></label></div>
                        <div class="dt-action-buttons align-self-center">
                            <div class="dt-buttons">
                                <button class="dt-button btn btn-primary _effect--ripple waves-effect waves-light"
                                        tabindex="0" aria-controls="invoice-list"><span>Add New</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3">
                        <div id="invoice-list_filter" class="dataTables_filter"><label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <input type="search" wire:model.live.debounce.350ms="search" class="form-control" placeholder="Search..."
                                       aria-controls="invoice-list"></label></div>
                        <div class="toolbar align-self-center">
                            <button class="dt-button dt-delete btn btn-danger _effect--ripple waves-effect waves-light"
                                    tabindex="0" aria-controls="invoice-list"><span>Delete</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="invoice-list" class="table dt-table-hover dataTable no-footer" style="width: 100%;"
                       role="grid" aria-describedby="invoice-list_info">
                    <thead>
                    <tr role="row">
                        <th class="checkbox-column sorting_disabled" rowspan="1" colspan="1" aria-label=" Record no. "
                            style="width: 21px;">
                            <div class="form-check form-check-primary d-block new-control">
                                #
                            </div>
                        </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Invoice Id: activate to sort column descending"
                            style="width: 70px;">
                            شماره سفارش
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending" style="width: 162px;">
                            کاربر
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-label="Email: activate to sort column ascending" style="width: 207px;">
                            ایمیل
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-label="Amount: activate to sort column ascending" style="width: 62px;">
                            مبلغ نهایی
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-label="Status: activate to sort column ascending" style="width: 62px;">
                            وضعیت پرداخت
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-label="Date: activate to sort column ascending" style="width: 65px;">
                            Date
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="invoice-list" rowspan="1" colspan="1"
                            aria-label="Actions: activate to sort column ascending" style="width: 82px;">
                           جزییات
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr role="row" class="active">
                            <td class="checkbox-column">
                                <div class="form-check form-check-primary d-block new-control">
                                    {{$loop->iteration + $orders->firstItem() - 1}}

                                </div>
                            </td>
                            <td class="sorting_1">
                                    <span class="inv-number">{{$order->order_number}}</span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <p class="align-self-center mb-0 user-name"> {{@$order->user->name}}</p>
                                </div>
                            </td>
                            <td>
                            <span class="inv-email">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-mail"><path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                        points="22,6 12,13 2,6"></polyline></svg>
                            {{@$order->user->email}}
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-phone"><path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            {{@$order->user->mobile}}
                            </span>
                            </td>
                            <td>
                                <span class="inv-amount">{{number_format($order->amount)}}</span>
                            </td>
                            <td>
                                <span class="badge badge-light-{{$order->statusPaymentColor}} inv-status">{{$order->payment->status}}</span>
                            </td>
                            <td>
                            <span class="inv-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2"
                                                                            ry="2"></rect><line
                                        x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line
                                        x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>{{jalali($order->created_at)->format('%d %B %Y | H:i')}}</span>
                            </td>
                            <td>

                                <a class="badge badge-light-danger text-start action-delete" href="{{route('admin.order.details',$order->id)}}">
                                    جزییات سفارش
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$orders->links('layouts.admin.pagination')}}
        </div>
    </div>
</div>
