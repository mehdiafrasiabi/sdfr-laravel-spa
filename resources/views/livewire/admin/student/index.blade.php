<div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-lg-12">
        <div class="widget-content searchable-container list">

            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="text" class="form-control product-search" id="input-search"
                                   placeholder="چستجو کنید ...">
                        </div>
                    </form>
                </div>
            </div>

            <div class="searchable-items list">
                <div class="items items-header-section">
                    <div class="item-content">
                        <div class="user-phone">
                            <h4>#</h4>
                        </div>
                        <div class="d-inline-flex">
                            <h4>نام و نام خانوادگی</h4>
                        </div>
                        <div class="user-phone">
                            <h4 style="margin-left: 3px;">تلفن همراه</h4>
                        </div>
                        <div class="user-phone">
                            <h4 style="margin-left: 3px;">تعداد امتیاز</h4>
                        </div>
                        <div class="action-btn">

                        </div>
                    </div>
                </div>
            @foreach($students as $student)
                    <div class="items">
                        <div class="item-content">
                            <div class="user-profile">
                                <div class="user-meta-info">
                                    <p class="user-name" data-name="Alan Green">{{$loop->iteration + $students->firstItem() - 1}}</p>
                                </div>
                            </div>
                            <div class="user-profile">
                                <div class="user-meta-info">
                                    <p class="user-name" data-name="Alan Green">{{$student->payment->order->user->name}}</p>

                                    @foreach($student->payment->order->orderItems as $item)
                                        <p class="user-work" data-occupation="Web Developer"> {{ $item->product->name ?? 'نامشخص' }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="user-phone">
                                <p class="info-title">تلفن همراه: </p>
                                <p class="usr-ph-no" data-phone="+1 (070) 123-4567">{{$student->payment->order->user->mobile}}</p>
                            </div>
                            <div class="user-phone">
                                <p class="info-title">تعداد امتیازات: </p>
                                <p class="usr-ph-no" data-phone="+1 (070) 123-4567">1350 امتیاز</p>
                            </div>
                            <div class="action-btn">
                                <a href="{{route('admin.student.plan',$student->payment->order->user->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-edit-2 edit">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg>
                                </a>
                                <a href="{{route('admin.student.report',$student->payment->order->user->id)}}" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user-minus delete">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
