<div class="col-md-12">
    @push('link')
        <style>
            .wrap-text {
                word-wrap: break-word;
                white-space: normal;
                overflow-wrap: break-word;
                max-width: 300px; /* یا هر عرضی که می‌خوای */
            }
        </style>
    @endpush
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>مشخصات دانش آموز:
                    <span wire:ignore style="color: #29971d">{{$studentName}}</span>
                </h4>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">نام</th>
                        <th scope="col">نام پدر</th>
                        <th scope="col">کدملی</th>
                        <th scope="col">تاریخ تولد</th>
                        <th scope="col">محل تولد</th>
                        <th scope="col">تلفن پدر</th>
                        <th scope="col">تلفن مادر</th>
                        <th scope="col">ادرس</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">تاریخ ثبت اطلاعات</th>
                        <th scope="col">استعلام</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($information as $item)

                        <tr>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{$item->father_name}}
                            </td>
                            <td>
                                {{$item->code_mell}}
                            </td>
                            <td>
                                {{jalali($item->birth_date)->format('Y/m/d')}}
                            </td>
                            <td>
                                {{$item->place_of_birth}}
                            </td>
                            <td>
                                {{$item->father_mobile}}
                            </td>
                            <td>
                                {{$item->mother_mobile}}
                            </td>
                            <td>
                                <div class="wrap-text">
                                    {{$item->address}}
                                </div>
                            </td>

                            <td>
                                <select
                                    wire:confirm="آیا از انتخاب خود برای تغییر وضعیت اطمینان دارید ؟"
                                    class="badge badge-light-{{$item->statusColor}} inv-status"
                                    wire:change="changeStatus({{$item->id}},$event.target.value)">
                                    <option value="pending" {{$item->status=='pending' ? 'selected' :''}}>
                                        درانتظار تایید اطلاعات
                                    </option>
                                    <option value="completed" {{$item->status=='completed' ? 'selected' :''}}>
                                        تایید اطلاعات
                                    </option>
                                    <option value="cancelled" {{$item->status=='cancelled' ? 'selected' :''}}>
                                     رد کردن اطلاعات
                                    </option>
                                </select>
                            </td>
                            <td>{{jalali($item->created_at)->format('%d %B %Y | h:i')}} </td>
                            <td>
                                <button class="btn btn-success" wire:click="fetchIdentity({{ $item->id }})">
                                    @if($loadingId === $item->id)
                                        در حال دریافت...
                                    @else
                                        استعلام اطلاعات
                                    @endif
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        @if($identityData && isset($identityData['error']))
            <div class="alert alert-danger mt-3">
                <strong>خطا در استعلام:</strong> {{ $identityData['error'] }}
            </div>
        @endif

        @if($identityData && !isset($identityData['error']))
            <div class="alert alert-light-info border-info p-4 mt-4">
                <h6 class="mb-3 text-info">🧾 نتیجه استعلام :</h6>

                <ul class="list-unstyled m-0">
                    <li><strong>نام:</strong> {{ $identityData['firstName'] ?? '---' }}</li>
                    <li><strong>نام خانوادگی:</strong> {{ $identityData['lastName'] ?? '---' }}</li>
                    <li><strong>نام پدر:</strong> {{ $identityData['fatherName'] ?? '---' }}</li>
                    <li><strong>کد ملی:</strong> {{ $identityData['nationalCode'] ?? '---' }}</li>
                    <li><strong>زنده:</strong>
                        @if(isset($identityData['alive']))
                            {!! $identityData['alive'] ? '<span class="badge bg-success">بله</span>' : '<span class="badge bg-danger">خیر</span>' !!}
                        @else
                            <span class="text-muted">نامشخص</span>
                        @endif
                    </li>
                </ul>
            </div>
        @endif



</div>



