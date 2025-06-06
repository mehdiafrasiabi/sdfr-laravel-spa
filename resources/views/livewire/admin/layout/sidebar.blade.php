<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="./index.html">
                        <img src="/admin/src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories ps ps--active-y" id="accordionExample">
            {{--Dashboard--}}
            <li class="menu">
                <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>داشبورد</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{route('admin.dashboard.index')}}"> انالیز کلی </a>
                    </li>
                    <li>
                        <a href="{{route('admin.dashboard.index')}}"> فروش </a>
                    </li>
                </ul>
            </li>
            {{--Category-->Done--}}
            <li class="menu">
                <a href="{{route('admin.category.index')}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-align-justify">
                            <line x1="21" y1="10" x2="3" y2="10"></line>
                            <line x1="21" y1="6" x2="3" y2="6"></line>
                            <line x1="21" y1="14" x2="3" y2="14"></line>
                            <line x1="21" y1="18" x2="3" y2="18"></line>
                        </svg>
                        <span>دسته بندی ها</span>
                    </div>
                </a>
            </li>
            {{--Products-->Done--}}
            <li class="menu">
                <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>محصولات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="products" data-bs-parent="#accordionExample">

                    <li>
                        <a href="{{route('admin.product.index')}}">لیست محصولات</a>
                    </li>

                    <li>
                        <a href="{{route('admin.product.create')}}">افزودن محصول جدید</a>
                    </li>
                </ul>
            </li>
            {{--Coupons--}}
            <li class="menu">
                <a href="{{route('admin.coupon.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-percent">
                            <line x1="19" y1="5" x2="5" y2="19"></line>
                            <circle cx="6.5" cy="6.5" r="2.5"></circle>
                            <circle cx="17.5" cy="17.5" r="2.5"></circle>
                        </svg>
                        <span>کد تخفیف</span>

                    </div>
                </a>

            </li>
            {{--Orders--}}
            <li class="menu">
                <a href="#orders" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-zap">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        <span>سفارشات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="orders" data-bs-parent="#accordionExample">
                    <li>
                        <a class="text-white badge badge-light-warning" href="{{route('admin.order.index')}}?status=all"> کل

                            سفارشات </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-secondary" href="{{route('admin.order.index')}}?status=pending">
                            درانتظار </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-info" href="{{route('admin.order.index')}}?status=processing">
                            درحال پردازش </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-success" href="{{route('admin.order.index')}}?status=completed">
                            کامل شده </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-danger" href="{{route('admin.order.index')}}?status=cancelled">
                            لغوشده </a>
                    </li>
                </ul>
            </li>
            {{--Transaction--}}
            <li class="menu">
                <a href="#transactions" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-zap">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        <span>تراکنش ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="transactions" data-bs-parent="#accordionExample">
                    <li>
                        <a class="text-white badge badge-light-info" href="{{route('admin.transaction.index')}}?status=all"> لیست تراکنش ها </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-success" href="{{route('admin.transaction.index')}}?status=completed"> موفق </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-danger" href="{{route('admin.transaction.index')}}?status=cancelled"> ناموفق </a>
                    </li>

                </ul>
            </li>
            {{--Users--}}
            <li class="menu">
                <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>کاربران</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                    <li>
                        <a class="text-white badge badge-success" href="{{route('admin.user.index')}}">مشتریان</a>
                    </li>
                    <li>
                        <a class="text-white badge badge-danger" href="#">ادمین ها</a>
                    </li>
                    <li>
                        <a class="text-white badge badge-primary" href="#">فروشندگان</a>
                    </li>
                </ul>
            </li>
            {{--Student--}}
            <li class="menu">
                <a href="#student" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 64 64"
                             stroke-width="2" stroke="currentColor" fill="none">
                            <path
                                d="M43.31,37.52A11.83,11.83,0,0,1,31.25,49.35,12.1,12.1,0,0,1,19.63,37.12V20.64a.1.1,0,0,1,.08-.1,90.43,90.43,0,0,1,12.08-1,82.5,82.5,0,0,1,11.57,1,.09.09,0,0,1,.07.1Z"/>
                            <path
                                d="M19.63,26,9,20.47a.1.1,0,0,1,0-.18L31.49,8.86h.09L54,20.17a.1.1,0,0,1,0,.18L43.43,26"/>
                            <path d="M19.63,32.19H17.7s-2.94,0-2.94,4.52c0,4.17,2.93,4.17,2.93,4.17l2.51-.05"/>
                            <path d="M43.3,32.7h1.93s3,0,3,4.53c0,4.17-2.94,4.17-2.94,4.17H42.65"/>
                            <line x1="52.72" y1="45.04" x2="52.72" y2="21.03"/>
                            <circle cx="52.72" cy="47.36" r="2.31"/>
                            <polyline points="37.76 47.53 37.76 55.15 25.89 55.15 25.89 47.95"/>
                            <path d="M43.43,30.13a63,63,0,0,0-11.61-1,60.25,60.25,0,0,0-12.19,1"/>
                        </svg>
                        <span>دانش آموزان</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="student" data-bs-parent="#accordionExample">
                    <li>
                        <a class="text-white badge badge-light-secondary" href="{{route('admin.student.index')}}?course_id=all">همه دانش اموزان</a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-success" href="{{route('admin.student.index')}}?course_id=1">سکوی پرتاب</a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-primary" href="{{route('admin.student.index')}}?course_id=2">توسعه و گستردگی </a>
                    </li>
                    <li>
                        <a class="text-white badge badge-light-danger" href="{{route('admin.student.index')}}?course_id=3">کوانتوم</a>
                    </li>
                </ul>
            </li>
            {{--Map -->Done --}}
            <li class="menu">
                <a href="#map" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-map-pin">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>مپ</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="map" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{route('admin.country.index')}}">کشور ها</a>
                    </li>
                    <li>
                        <a href="{{route('admin.state.index')}}">استان ها</a>
                    </li>

                    <li>
                        <a href="{{route('admin.city.index')}}">شهر ها</a>
                    </li>
                </ul>
            </li>
            {{--Payment Method -->Done--}}
            <li class="menu">
                <a href="{{route('admin.paymentMethod.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span>روش های پرداخت</span>
                    </div>
                </a>
            </li>
            {{--Story --}}
            <li class="menu">
                <a href="{{route('admin.story.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-loader">
                            <line x1="12" y1="2" x2="12" y2="6"></line>
                            <line x1="12" y1="18" x2="12" y2="22"></line>
                            <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                            <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                            <line x1="2" y1="12" x2="6" y2="12"></line>
                            <line x1="18" y1="12" x2="22" y2="12"></line>
                            <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                            <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                        </svg>
                        <span>مدیریت استوری ها</span>
                    </div>
                </a>
            </li>
            {{--Setting--}}
            <li class="menu">
                <a href="#setting" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                        <span>تنظیمات سایت</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="setting" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{route('admin.setting.contact-us.index')}}">ارتباط با ما </a>
                    </li>
                    <li>
                        <a href="{{route('admin.admin.index')}}">ادمین</a>
                    </li>
                    <li>
                        <a href="{{route('admin.setting.general-setting.index')}}">تنظیمات عمومی سایت</a>
                    </li>
                    <li>
                        <a href="./table-datatable-striped-table.html">تنظیمات قوتر</a>
                    </li>

                    <li>
                        <a href="./table-datatable-custom.html">رد شده</a>
                    </li>
                    <li>
                        <a href="./table-datatable-miscellaneous.html">مدیریت بنز های اصلی</a>
                    </li>
                </ul>
            </li>
            <div class="ps__rail-x" style="left: 0px; bottom: -147px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 147px; height: 757px; left: 28px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 457px; height: 300px;"></div>
            </div>
        </ul>

    </nav>

</div>
