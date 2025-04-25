<div class="row">

    {{--form--}}
    <div class="col-md-4">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>مدیریت کدهای تخفیفی</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="code" class="form-label">کد تخفیف :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="text" class="form-control" id="code" wire:model="code" name="code"
                                   placeholder="">
                        </div>
                    </div>
                    @error('code')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="type" class="form-label">نوع:
                                <sup style="color: red">*</sup>
                            </label>
                            <select class="form-control" name="type" wire:model="type">
                                <option value="">انتخاب کنید</option>
                                <option value="fixed">نقدی</option>
                                <option value="percent">درصدی</option>
                            </select>
                        </div>
                    </div>
                    @error('type')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="value" class="form-label">میزان تخفیف :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="text" class="form-control" id="value" wire:model="value" name="value"
                                   placeholder="10 هزار تومان یا 5 درصد">
                        </div>
                    </div>
                    @error('value')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="limit" class="form-label">تعداد دفعات استفاده :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="tel" class="form-control" id="limit" wire:model="limit" name="limit"
                                   placeholder="20 نفر">
                        </div>
                    </div>
                    @error('limit')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="min_purchase" class="form-label">حداقل میزان سبد خرید :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="tel" class="form-control" id="min_purchase" wire:model="min_purchase" name="min_purchase"
                                   placeholder="5 میلیوت تومان">
                        </div>
                    </div>
                    @error('min_purchase')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="expires_at" class="form-label">تاریخ انقضا :
                                <sup style="color: red">*</sup>
                            </label>
                            <input type="date" class="form-control" id="expires_at" wire:model="expires_at" name="expires_at"
                                   placeholder="">
                        </div>
                    </div>
                    @error('expires_at')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="user_id" class="form-label">انتخاب کاربر خصوصی :
                                <sup style="color: red">*</sup>
                            </label>
                            <select wire:model="user_id" class="form-select">
                                <option value="">عمومی (برای همه کاربران)</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>

                       </div>
                    </div>
                    @error('user_id')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="is_active" class="form-label">وضعیت کد :
                                <sup style="color: red">*</sup>
                            </label>
                            <div class="form-check form-check-success form-check-inline">
                                <input class="form-check-input" type="radio" name="is_active" id="form-check-radio-success" wire:model="is_active" value="1">
                                <label class="form-check-label" for="form-check-radio-success">
                                    فعال
                                </label>
                            </div>
                            <div class="form-check form-check-danger form-check-inline">
                                <input class="form-check-input" type="radio" name="0" id="form-check-radio-danger" wire:model="is_active" value="0">
                                <label class="form-check-label" for="form-check-radio-danger">
                                    غیر فعال
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('is_active')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="is_public" class="form-label">نوع کد :
                                <sup style="color: red">*</sup>
                            </label>
                            <div class="form-check form-check-success form-check-inline">
                                <input class="form-check-input" type="radio" name="is_public" id="form-check-radio-success" wire:model="is_public" value="1">
                                <label class="form-check-label" for="form-check-radio-success">
                                    عمومی
                                </label>
                            </div>
                            <div class="form-check form-check-danger form-check-inline">
                                <input class="form-check-input" type="radio" name="is_public" id="form-check-radio-danger" wire:model="is_public" value="0">
                                <label class="form-check-label" for="form-check-radio-danger">
                                     شخصی
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('is_public')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                         wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <strong>خطا !</strong> <br>
                        {{$message}}
                    </div>
                    @enderror


                    <button type="submit" class="btn btn-success btn-lg _effect--ripple waves-effect waves-light">
                        <span wire:loading.remove>ثبت</span>
                        <div wire:loading>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-loader spin me-2">
                                <line x1="12" y1="2" x2="12" y2="6"></line>
                                <line x1="12" y1="18" x2="12" y2="22"></line>
                                <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                <line x1="2" y1="12" x2="6" y2="12"></line>
                                <line x1="18" y1="12" x2="22" y2="12"></line>
                                <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                            </svg>
                        </div>
                    </button>
                </form>

            </div>
        </div>


    </div>
    {{--list--}}
    <div class="col-md-8">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>
                            لیست کدهای تخفیف
                        </h4>
                        <div id="invoice-list_filter" class="dataTables_filter">
                            <label>
                                <input type="search" wire:model.live.debounce.350ms="search" class="form-control" placeholder="جستجو بر اساس کد " aria-controls="invoice-list">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">کد تخفیف</th>
                            <th scope="col">نوع</th>
                            <th scope="col">میزان تخفیف</th>
                            <th scope="col">تعداد</th>
                            <th scope="col">حداقل خرید</th>
                            <th scope="col">تاریخ انقضا</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">کاربر</th>
                            <th scope="col">نوع کوپن</th>
                            <th class="text-center" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($coupons as $coupon)

                            <tr>
                                <td>
                                    {{$loop->iteration + $coupons->firstItem() - 1}}
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$coupon->code}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$coupon->type=='fixed'?'نقدی':'درصدی'}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">
                                                @if($coupon->type=='fixed')
                                                    {{number_format($coupon->value)}}هزار تومان
                                                @else
                                                     {{$coupon->value}}درصد
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$coupon->limit}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">
                                                {{number_format($coupon->min_purchase)}}تومان
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{jalali($coupon->expires_at)->format('%d %B %Y | h:i')}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$coupon->is_active=='1'?'فعال':'غیرفعال'}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$coupon->user_id == null ? 'همه': $coupon->user_id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$coupon->is_public=='1'?'عمومی':'خصوصی'}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="action-btns">

                                        <a href="javascript:void(0);" wire:click="edit({{$coupon->id}})"
                                           class="action-btn btn-edit bs-tooltip me-2"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-bs-original-title="ویرایش">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-edit-2">
                                                <path
                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0);"
                                           wire:confirm="آیا از انتخاب خود اطمینان دارید؟"
                                           wire:click="delete({{$coupon->id}})"
                                           class="action-btn btn-delete bs-tooltip"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-bs-original-title="حدف">
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
                    {{$coupons->links('layouts.admin.pagination')}}
                </div>

            </div>
        </div>

    </div>
</div>
