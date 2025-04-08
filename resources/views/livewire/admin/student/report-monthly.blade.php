<div class="row">
    {{--form--}}
    <div class="col-md-4">

        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>گزارش های ارسالی به :
                                <span wire:ignore style="color: #29971d">{{$studentName}}</span>
                            </h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label for="title" class="form-label">عنوان گزارش :</label>
                            <input type="text" class="form-control" id="title" wire:model="title" name="title"
                                   placeholder="">
                        </div>
                    </div>

                    @error('title')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                         wire:loading.remove
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


                    <div class="field-wrapper mb-4" x-data="{isUploading:false,progress:0 }"
                         x-on:livewire-upload-start="isUploading=true"
                         x-on:livewire-upload-finish="isUploading=false"
                         x-on:livewire-upload-error="isUploading=false"
                         x-on:livewire-upload-progress="progress=$event.detail.progress"
                    >
                        <label for="reportMonthly" class="form-label">آپلود گزارش :</label>
                        <input type="file" class="form-control" id="reportMonthly" wire:model="reportMonthly" name="reportMonthly"
                               placeholder="">

                        <div x-show="isUploading" class="progress mt-3 ltr">
                            <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated"
                                 role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>

                    @error('reportMonthly')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                         wire:loading.remove
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
                    <button type="submit" class="btn btn-success _effect--ripple waves-effect waves-light">
                        <span wire:loading.remove> ثبت</span>
                        <div class="spinner-border text-white me-2 align-self-center loader-sm " wire:loading></div>
                    </button>
                    <a href="{{route('admin.student.index')}}" class="btn btn-danger _effect--ripple waves-effect waves-light">
                        <span >بازگشت</span>
                    </a>
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
                        <h4>لیست گزارش های ماهانه</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">عنوان</th>
                            <th scope="col">پیوند گزارش</th>
                            <th scope="col">تاریخ بارگذاری</th>
                            <th class="text-center" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($reports as $item)

                            <tr>
                                <td>
                                    {{$loop->iteration + $reports->firstItem() - 1}}
                                </td>
                                <td>
                                    <div class="media">

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">{{$item->title}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="/student/{{$studentId}}/report_monthly/{{$item->report}}" class="text-secondary"> مشاهده</a>
                                </td>
                                <td>
                                    <div>{{jalali($item->created_at)->format('%d %B %Y')}}</div>
                                </td>
                                <td class="text-center">
                                    <div class="action-btns d-flex align-items-center">
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
                    {{$reports->links('layouts.admin.pagination')}}
                </div>

            </div>
        </div>
    </div>
</div>
