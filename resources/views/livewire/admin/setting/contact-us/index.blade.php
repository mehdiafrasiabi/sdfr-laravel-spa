<div class="col-md-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>لیست ارتباط با ما </h4>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">تلفن تماس</th>
                        <th scope="col">متن پیغام</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">تاریخ ثبت درخواست</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($contactUs as $item)

                        <tr>
                            <td>
                                {{$loop->iteration + $contactUs->firstItem() - 1}}
                            </td>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{$item->mobile}}
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="mb-0">{{$item->text}}</p>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <select
                                    wire:confirm="آیا از انتخاب خود برای تغییر وضعیت اطمینان دارید ؟"
                                    class="badge badge-light-{{$item->statusColor}} inv-status"
                                    wire:change="changeStatus({{$item->id}},$event.target.value)">
                                    <option value="pending" {{$item->status=='pending' ? 'selected' :''}}>درانتظار
                                        تماس
                                    </option>
                                    <option value="completed" {{$item->status=='completed' ? 'selected' :''}}>تماس گرفته
                                        شد
                                    </option>
                                    <option value="canceled" {{$item->status=='canceled' ? 'selected' :''}}>پاسخ داده
                                        نشده
                                    </option>
                                </select>
                            </td>
                            <td>{{jalali($item->created_at)->format('%B %d، %Y | h:i')}} </td>
                            <td class="text-center">
                                <div class="action-btns">
                                    <a href="javascript:void(0);"
                                       wire:confirm="آیا مطمئن هستید؟"
                                       wire:click="delete({{$item->id}})"
                                       class="action-btn btn-delete bs-tooltip"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$contactUs->links('layouts.admin.pagination')}}
            </div>

        </div>
    </div>

</div>



