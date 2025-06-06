<div class="max-w-7xl space-y-14 px-4 mx-auto">
    <div class="grid md:grid-cols-12 grid-cols-1 items-start gap-5">
        <div class="lg:col-span-3 md:col-span-4 md:sticky md:top-24">
            <!-- user:info -->
            <div class="flex items-center gap-5 mb-5">
                <div class="flex items-center gap-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                        <img src="/client/assets/images/avatars/01.jpeg" class="w-full h-full object-cover"
                             alt="..." />
                    </div>
                    <div class="flex flex-col items-start space-y-1">
                        <span class="text-xs text-muted">خوش آمدید</span>
                        <span class="line-clamp-1 font-semibold text-sm text-foreground cursor-default">جلال
                                        بهرامی راد</span>
                    </div>
                </div>
            </div>
            <!-- end user:info -->

            <!-- user:menus -->
            <ul class="flex flex-col space-y-3 bg-secondary rounded-2xl p-5">
                <li>
                    <a href="{{route('client.profile.dashboard')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>
                        <span class="font-semibold text-xs">پیشخوان</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.notification')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">اعلانات</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.plan')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">برنامه و گزارش های من</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.report')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">گزارش های روزانه من</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.financial')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">مالی و اشتراک</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.ticket')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <span class="font-semibold text-xs">تیکت و پشتیبانی</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.edit')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-primary rounded-full text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-5 h-5">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                        </svg>
                        <span class="font-semibold text-xs">ویرایش پروفایل</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.logout')}}"
                            class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">خروج از حساب</span>
                    </a>
                </li>
            </ul>
            <!-- end user:menus -->
        </div>
        <div class="lg:col-span-9 md:col-span-8">
            <div class="space-y-10">
                <div class="space-y-5">
                    <!-- section:title -->
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-1">
                            <div class="w-1 h-1 bg-foreground rounded-full"></div>
                            <div class="w-2 h-2 bg-foreground rounded-full"></div>
                        </div>
                        <div class="font-black text-foreground">ویرایش پروفایل</div>
                    </div>
                    <!-- end section:title -->

                    <!-- tabs container -->
                    <div class="space-y-5" x-data="{ activeTab: 'tabOne'}">
                        <!-- tabs:list-container -->
                        <div class="relative overflow-x-auto">
                            <!-- tabs:list -->
                            <ul
                                class="inline-flex gap-2 bg-secondary border border-border rounded-full p-1">
                                <!-- tabs:list:item -->
                                <li>
                                    <button type="button"
                                            class="flex items-center gap-x-2 w-full relative rounded-full py-2 px-4"
                                            x-bind:class="activeTab === 'tabOne' ? 'text-foreground bg-background' : 'text-muted'"
                                            x-on:click="activeTab = 'tabOne'">
                                        <!-- active icon -->
                                        <span x-show="activeTab === 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M16.7574 2.99677L9.29145 10.4627L9.29886 14.7098L13.537 14.7024L21 7.23941V19.9968C21 20.5491 20.5523 20.9968 20 20.9968H4C3.44772 20.9968 3 20.5491 3 19.9968V3.99677C3 3.44448 3.44772 2.99677 4 2.99677H16.7574ZM20.4853 2.09727L21.8995 3.51149L12.7071 12.7039L11.2954 12.7063L11.2929 11.2897L20.4853 2.09727Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                        <!-- inactive icon -->
                                        <span x-show="activeTab !== 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M16.7574 2.99677L14.7574 4.99677H5V18.9968H19V9.23941L21 7.23941V19.9968C21 20.5491 20.5523 20.9968 20 20.9968H4C3.44772 20.9968 3 20.5491 3 19.9968V3.99677C3 3.44448 3.44772 2.99677 4 2.99677H16.7574ZM20.4853 2.09727L21.8995 3.51149L12.7071 12.7039L11.2954 12.7063L11.2929 11.2897L20.4853 2.09727Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                        <span class="font-semibold text-sm whitespace-nowrap">اطلاعات
                                                        حساب</span>
                                    </button>
                                </li><!-- end tabs:list:item -->

                                <!-- tabs:list:item -->
                                <li>
                                    <button type="button"
                                            class="flex items-center gap-x-2 w-full relative rounded-full py-2 px-4"
                                            x-bind:class="activeTab === 'tabTwo' ? 'text-foreground bg-background' : 'text-muted'"
                                            x-on:click="activeTab = 'tabTwo'">
                                        <!-- active icon -->
                                        <span x-show="activeTab === 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C11.4477 17 11 17.4477 11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                        <!-- inactive icon -->
                                        <span x-show="activeTab !== 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M7 4V20H17V4H7ZM6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C12.5523 17 13 17.4477 13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18C11 17.4477 11.4477 17 12 17Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                        <span class="font-semibold text-sm whitespace-nowrap">شماره
                                                        موبایل</span>
                                    </button>
                                </li><!-- end tabs:list:item -->

                                <!-- tabs:list:item -->
                                <li>
                                    <button type="button"
                                            class="flex items-center gap-x-2 w-full relative rounded-full py-2 px-4"
                                            x-bind:class="activeTab === 'tabThree' ? 'text-foreground bg-background' : 'text-muted'"
                                            x-on:click="activeTab = 'tabThree'">
                                        <!-- active icon -->
                                        <span x-show="activeTab === 'tabThree'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M17 14H12.6586C11.8349 16.3304 9.61244 18 7 18C3.68629 18 1 15.3137 1 12C1 8.68629 3.68629 6 7 6C9.61244 6 11.8349 7.66962 12.6586 10H23V14H21V18H17V14ZM7 14C8.10457 14 9 13.1046 9 12C9 10.8954 8.10457 10 7 10C5.89543 10 5 10.8954 5 12C5 13.1046 5.89543 14 7 14Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                        <!-- inactive icon -->
                                        <span x-show="activeTab !== 'tabThree'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M12.917 13C12.441 15.8377 9.973 18 7 18C3.68629 18 1 15.3137 1 12C1 8.68629 3.68629 6 7 6C9.973 6 12.441 8.16229 12.917 11H23V13H21V17H19V13H17V17H15V13H12.917ZM7 16C9.20914 16 11 14.2091 11 12C11 9.79086 9.20914 8 7 8C4.79086 8 3 9.79086 3 12C3 14.2091 4.79086 16 7 16Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                        <span class="font-semibold text-sm whitespace-nowrap">رمز
                                                        عبور</span>
                                    </button>
                                </li><!-- end tabs:list:item -->

                                <!-- tabs:list:item -->
                                <li>
                                    <button type="button"
                                            class="flex items-center gap-x-2 w-full relative rounded-full py-2 px-4"
                                            x-bind:class="activeTab === 'tabFour' ? 'text-foreground bg-background' : 'text-muted'"
                                            x-on:click="activeTab = 'tabFour'">
                                        <!-- active icon -->
                                        <span x-show="activeTab === 'tabFour'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M12 2C16.9706 2 21 6.04348 21 11.0314V20H3V11.0314C3 6.04348 7.02944 2 12 2ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                        <!-- inactive icon -->
                                        <span x-show="activeTab !== 'tabFour'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M5 18H19V11.0314C19 7.14806 15.866 4 12 4C8.13401 4 5 7.14806 5 11.0314V18ZM12 2C16.9706 2 21 6.04348 21 11.0314V20H3V11.0314C3 6.04348 7.02944 2 12 2ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                        <span class="font-semibold text-sm whitespace-nowrap">اطلاع
                                                        رسانی</span>
                                    </button>
                                </li><!-- end tabs:list:item -->
                            </ul><!-- end tabs:list -->
                        </div><!-- end tabs:list-container -->
                        <!-- tabs:contents -->
                        <div class="bg-background rounded-3xl p-5">
                            <!-- tabs:contents:tabOne -->
                            <div class="space-y-5" x-show="activeTab === 'tabOne'">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">اطلاعات حساب</div>
                                </div>

                                <form action="#" class="space-y-5">
                                    <div class="grid sm:grid-cols-2 gap-5">
                                        <div class="space-y-1">
                                            <label for="fullname" class="font-medium text-xs text-muted">نام
                                                و
                                                نام خانوادگی (فارسی)</label>
                                            <input type="text" id="fullname"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                        <div class="space-y-1">
                                            <label for="email"
                                                   class="font-medium text-xs text-muted">ایمیل</label>
                                            <input type="text" id="email" dir="ltr"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            <div class="font-medium text-xs text-muted">
                                                در حال حاضر ایمیل قابل تغییر نمیباشد.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-1 lg:w-1/2">
                                        <label for="username" class="font-medium text-xs text-muted">آدرس
                                            پروفایل</label>
                                        <div class="flex items-center gap-2">
                                            <input type="text" id="username" dir="ltr"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            <span class="text-xs text-muted"
                                                  dir="ltr">https://example.test/@</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                            <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                        </div>
                                        <div class="font-black text-foreground">اطلاعات فردی</div>
                                    </div>
                                    <div class="space-y-1">
                                        <label for="birthday" class="font-medium text-xs text-muted">تاریخ
                                            تولد</label>
                                        <div class="grid sm:grid-cols-3 gap-5"
                                             x-data="{range: function(start, end) { return Array(end - start + 1).fill().map((_, idx) => start + idx) } }">
                                            <!-- form:select container -->
                                            <div class="flex flex-col space-y-2">
                                                <!-- form:select -->
                                                <div class="w-full relative"
                                                     x-data="{ open: false, selectedOption: 'انتخاب سال', selectedValue: '' }">
                                                    <!-- The selected value is stored in this input. -->
                                                    <input type="hidden" x-model="selectedValue" />

                                                    <!-- form:select:button -->
                                                    <button type="button" x-on:click="open = !open"
                                                            class="flex items-center w-full h-11 relative bg-secondary border border-border rounded-xl font-semibold text-xs text-right text-foreground px-3">
                                                                    <span class="line-clamp-1"
                                                                          x-text="selectedOption"></span>
                                                        <span
                                                            class="absolute left-3 pointer-events-none transition-transform"
                                                            x-bind:class="open ? 'rotate-180' : ''">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor"
                                                                             class="w-5 h-5">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                                        </svg>
                                                                    </span>
                                                    </button><!-- end form:select:button -->

                                                    <!-- form:select:options container -->
                                                    <div class="absolute w-full bg-secondary border border-border rounded-xl shadow-lg overflow-hidden mt-2 z-30"
                                                         x-show="open" x-on:click.away="open = false">
                                                        <ul class="max-h-48 overflow-y-auto">
                                                            <template x-for="year in range(1300, 1399)"
                                                                      :key="index">
                                                                <!-- form:select option -->
                                                                <li class="font-medium text-xs text-foreground cursor-pointer hover:bg-background px-4 py-3"
                                                                    x-on:click="selectedOption = year; selectedValue = year.toString(); open = false"
                                                                    x-text="year">
                                                                </li>
                                                                <!-- end form:select:option -->
                                                            </template>
                                                        </ul>
                                                    </div><!-- end form:select:options container -->
                                                </div><!-- end form:select -->
                                            </div><!-- end form:select container -->

                                            <!-- form:select container -->
                                            <div class="flex flex-col space-y-2">
                                                <!-- form:select -->
                                                <div class="w-full relative"
                                                     x-data="{ open: false, selectedOption: 'انتخاب ماه', selectedValue: '', options: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'] }">
                                                    <!-- The selected value is stored in this input. -->
                                                    <input type="hidden" x-model="selectedValue" />

                                                    <!-- form:select:button -->
                                                    <button type="button" x-on:click="open = !open"
                                                            class="flex items-center w-full h-11 relative bg-secondary border border-border rounded-xl font-semibold text-xs text-right text-foreground px-3">
                                                                    <span class="line-clamp-1"
                                                                          x-text="selectedOption"></span>
                                                        <span
                                                            class="absolute left-3 pointer-events-none transition-transform"
                                                            x-bind:class="open ? 'rotate-180' : ''">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor"
                                                                             class="w-5 h-5">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                                        </svg>
                                                                    </span>
                                                    </button><!-- end form:select:button -->

                                                    <!-- form:select:options container -->
                                                    <div class="absolute w-full bg-secondary border border-border rounded-xl shadow-lg overflow-hidden mt-2 z-30"
                                                         x-show="open" x-on:click.away="open = false">
                                                        <ul class="max-h-48 overflow-y-auto">
                                                            <template x-for="(month, index) in options"
                                                                      :key="index">
                                                                <!-- form:select option -->
                                                                <li class="font-medium text-xs text-foreground cursor-pointer hover:bg-background px-4 py-3"
                                                                    x-on:click="selectedOption = month; selectedValue = (index + 1).toString(); open = false"
                                                                    x-text="month">
                                                                </li>
                                                                <!-- end form:select:option -->
                                                            </template>
                                                        </ul>
                                                    </div><!-- end form:select:options container -->
                                                </div><!-- end form:select -->
                                            </div><!-- end form:select container -->

                                            <!-- form:select container -->
                                            <div class="flex flex-col space-y-2">
                                                <!-- form:select -->
                                                <div class="w-full relative"
                                                     x-data="{ open: false, selectedOption: 'انتخاب روز', selectedValue: '' }">
                                                    <!-- The selected value is stored in this input. -->
                                                    <input type="hidden" x-model="selectedValue" />

                                                    <!-- form:select:button -->
                                                    <button type="button" x-on:click="open = !open"
                                                            class="flex items-center w-full h-11 relative bg-secondary border border-border rounded-xl font-semibold text-xs text-right text-foreground px-3">
                                                                    <span class="line-clamp-1"
                                                                          x-text="selectedOption"></span>
                                                        <span
                                                            class="absolute left-3 pointer-events-none transition-transform"
                                                            x-bind:class="open ? 'rotate-180' : ''">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor"
                                                                             class="w-5 h-5">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                                        </svg>
                                                                    </span>
                                                    </button><!-- end form:select:button -->

                                                    <!-- form:select:options container -->
                                                    <div class="absolute w-full bg-secondary border border-border rounded-xl shadow-lg overflow-hidden mt-2 z-30"
                                                         x-show="open" x-on:click.away="open = false">
                                                        <ul class="max-h-48 overflow-y-auto">
                                                            <template x-for="day in range(1, 31)"
                                                                      :key="index">
                                                                <!-- form:select option -->
                                                                <li class="font-medium text-xs text-foreground cursor-pointer hover:bg-background px-4 py-3"
                                                                    x-on:click="selectedOption = day; selectedValue = day.toString(); open = false"
                                                                    x-text="day">
                                                                </li>
                                                                <!-- end form:select:option -->
                                                            </template>
                                                        </ul>
                                                    </div><!-- end form:select:options container -->
                                                </div><!-- end form:select -->
                                            </div><!-- end form:select container -->
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <label for="bio" class="font-medium text-xs text-muted">درباره
                                            من</label>
                                        <textarea rows="5" id="bio"
                                                  class="form-textarea w-full !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5"></textarea>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                            <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                        </div>
                                        <div class="font-black text-foreground">راه های ارتباطی</div>
                                    </div>
                                    <div class="grid sm:grid-cols-2 gap-5">
                                        <div class="space-y-1">
                                            <label for="website"
                                                   class="font-medium text-xs text-muted">وبسایت</label>
                                            <input type="text" dir="ltr" id="website"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                        <div class="space-y-1">
                                            <label for="github" class="font-medium text-xs text-muted">گیت
                                                هاب</label>
                                            <input type="text" dir="ltr" id="github"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                        <div class="space-y-1">
                                            <label for="linkedin"
                                                   class="font-medium text-xs text-muted">لینکدین</label>
                                            <input type="text" dir="ltr" id="linkedin"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                        <div class="space-y-1">
                                            <label for="telegram"
                                                   class="font-medium text-xs text-muted">تلگرام</label>
                                            <input type="text" dir="ltr" id="telegram"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                    </div>
                                    <div class="flex justify-end gap-5">
                                        <button type="submit"
                                                class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-full text-white px-4 mr-auto">
                                            <span class="font-semibold text-sm">بروزرسانی</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                      d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div><!-- end tabs:contents:tabOne -->

                            <!-- tabs:contents:tabTwo -->
                            <div class="space-y-5" x-show="activeTab === 'tabTwo'">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">شماره موبایل</div>
                                </div>
                                <!-- alert -->
                                <div class="flex items-start gap-3 relative bg-zinc-50 dark:bg-zinc-900 border border-border rounded-xl p-5"
                                     x-show="open" x-data="{ open: true }">
                                    <!-- alert:icon -->
                                    <span class="text-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd"
                                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </span><!-- alert:icon -->

                                    <!-- alert:content -->
                                    <div class="flex flex-col items-start">
                                        <!-- alert:title -->
                                        <div class="font-bold text-sm text-blue-500 mb-2">
                                            توجه :‌
                                        </div><!-- end alert:title -->

                                        <!-- alert:desc -->
                                        <div class="font-semibold text-xs text-zinc-400">
                                            <p class="mb-3">
                                                شماره تلفن شما برای کارهای مختلفی در سایت مورد استفاده قرار
                                                میگیرد با وارد کردن شماره تلفن خود و فعال کردن آن میتوانید
                                                بخشی
                                                از فعالیت های خود را در نابغه سریع تر انجام دهید. در زیر
                                                لیست
                                                کارهای که با شماره تلفن شما در سایت انجام میشود، را برایتان
                                                آورده ایم.
                                            </p>

                                            <ul>
                                                <li>
                                                    ۱.در آینده نزدیک ورود به سایت تماما با شماره تلفن همراه
                                                    انجام
                                                    خواهد شد. (به زودی)
                                                </li>
                                                <li>
                                                    ۲.در هنگام ورود به سایت پیامکی برای شما ارسال میشود تا
                                                    از
                                                    ورود‌های بدون اجازه مطلع شوید. کنید
                                                </li>
                                                <li>
                                                    ۳.در صورت فعال‌سازی نوتیفیکشن یک دوره، قسمت‌های جدید آن
                                                    دوره
                                                    با پیامک به شما اطلاع داده خواهد شد. (به زودی)
                                                </li>
                                                <li>
                                                    ۴.در صورت اضافه شدن مورد جدید در این لیست اضافه خواهد شد
                                                    ...
                                                </li>
                                            </ul>
                                        </div><!-- end alert:desc -->

                                        <!-- alert:actions -->
                                        <div class="flex flex-wrap items-center gap-3 mt-5">
                                            <button type="button"
                                                    class="flex items-center gap-x-1 text-zinc-400 underline-offset-1 hover:underline"
                                                    x-on:click="open = false">
                                                <span class="font-bold text-xs">فهمیدم</span>
                                            </button>
                                        </div><!-- end alert:actions -->
                                    </div><!-- end alert:content -->
                                </div><!-- end alert -->

                                <form action="#" class="space-y-5">
                                    <div class="flex flex-col gap-5">
                                        <div class="space-y-1 sm:w-1/2">
                                            <label for="phone_number"
                                                   class="block font-medium text-xs text-muted">شماره تماس
                                                فعلی</label>
                                            <input type="text" dir="ltr" id="phone_number"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground disabled:text-muted px-5"
                                                   value="09123456789" disabled />
                                        </div>
                                        <div class="space-y-1 sm:w-1/2">
                                            <label for="phone_number_new"
                                                   class="block font-medium text-xs text-muted">شماره تماس
                                                جدید</label>
                                            <input type="text" dir="ltr" id="phone_number_new"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                    </div>
                                    <div class="flex justify-end gap-5">
                                        <button type="submit"
                                                class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-full text-white px-4 mr-auto">
                                            <span class="font-semibold text-sm">بروزرسانی</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                      d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div><!-- end tabs:contents:tabTwo -->

                            <!-- tabs:contents:tabTwo -->
                            <div class="space-y-5" x-show="activeTab === 'tabThree'">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">رمز عبور</div>
                                </div>
                                <!-- alert -->
                                <div class="flex items-start gap-3 relative bg-zinc-50 dark:bg-zinc-900 border border-border rounded-xl p-5"
                                     x-show="open" x-data="{ open: true }">
                                    <!-- alert:icon -->
                                    <span class="text-yellow-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd"
                                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </span><!-- alert:icon -->

                                    <!-- alert:content -->
                                    <div class="flex flex-col items-start">
                                        <!-- alert:title -->
                                        <div class="font-bold text-sm text-yellow-500 mb-2">
                                            توجه :‌
                                        </div><!-- end alert:title -->

                                        <!-- alert:desc -->
                                        <div class="font-semibold text-xs text-zinc-400">
                                            <ul>
                                                <li>حداقل یک حرف کوچک استفاده کنید</li>
                                                <li>حداقل یک حرف بزرگ استفاده کنید</li>
                                                <li>پسورد حداقل باید ۸ کاراکتر باشد</li>
                                                <li>حداقل از یک عدد استفاده کنید</li>
                                            </ul>
                                        </div><!-- end alert:desc -->

                                        <!-- alert:actions -->
                                        <div class="flex flex-wrap items-center gap-3 mt-5">
                                            <button type="button"
                                                    class="flex items-center gap-x-1 text-zinc-400 underline-offset-1 hover:underline"
                                                    x-on:click="open = false">
                                                <span class="font-bold text-xs">فهمیدم</span>
                                            </button>
                                        </div><!-- end alert:actions -->
                                    </div><!-- end alert:content -->
                                </div><!-- end alert -->

                                <form action="#" class="space-y-5">
                                    <div class="flex flex-col gap-5">
                                        <div class="space-y-1 sm:w-1/2">
                                            <label for="password"
                                                   class="block font-medium text-xs text-muted">پسورد
                                                فعلی</label>
                                            <input type="text" dir="ltr" id="password"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                        <div class="space-y-1 sm:w-1/2">
                                            <label for="password_new"
                                                   class="block font-medium text-xs text-muted">پسورد
                                                جدید</label>
                                            <input type="text" dir="ltr" id="password_new"
                                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                        </div>
                                    </div>
                                    <div class="flex justify-end gap-5">
                                        <button type="submit"
                                                class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-full text-white px-4 mr-auto">
                                            <span class="font-semibold text-sm">بروزرسانی</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                      d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div><!-- end tabs:contents:tabTwo -->

                            <!-- tabs:contents:tabTwo -->
                            <div class="space-y-5" x-show="activeTab === 'tabFour'">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">اطلاع رسانی</div>
                                </div>

                                <form action="#" class="space-y-5">
                                    <div class="relative overflow-x-auto">
                                        <table class="w-full text-sm text-right">
                                            <thead
                                                class="text-xs text-muted uppercase border-b border-border">
                                            <tr>
                                                <th class="p-5">عملیات</th>
                                                <th class="p-5">پیامک</th>
                                                <th class="p-5">ایمیل</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="p-5">
                                                    <div class="font-medium text-sm text-muted">
                                                        تایید دیدگاه
                                                    </div>
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer"
                                                           checked />
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-5">
                                                    <div class="font-medium text-sm text-muted">
                                                        بروزرسانی دوره
                                                    </div>
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer"
                                                           checked />
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-5">
                                                    <div class="font-medium text-sm text-muted">
                                                        ورود به سایت
                                                    </div>
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer" />
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer"
                                                           checked />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-5">
                                                    <div class="font-medium text-sm text-muted">
                                                        خرید دوره
                                                    </div>
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer" />
                                                </td>
                                                <td class="p-5">
                                                    <input type="checkbox"
                                                           class="form-checkbox w-6 h-6 !ring-0 !ring-offset-0 bg-border border-0 rounded-lg cursor-pointer"
                                                           checked />
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex justify-end gap-5">
                                        <button type="submit"
                                                class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-full text-white px-4 mr-auto">
                                            <span class="font-semibold text-sm">بروزرسانی</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                      d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div><!-- end tabs:contents:tabTwo -->
                        </div><!-- end tabs:contents -->
                    </div><!-- end tabs container -->
                </div>
            </div>
        </div>
    </div>
</div>
