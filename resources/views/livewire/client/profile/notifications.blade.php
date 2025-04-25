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
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-primary rounded-full text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-5 h-5">
                            <path fill-rule="evenodd"
                                  d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                                  clip-rule="evenodd" />
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
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125">
                            </path>
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
                        <div class="font-black text-foreground">اعلانات</div>
                    </div>
                    <!-- end section:title -->

                    <!-- section:notifications:wrapper -->
                    <div class="space-y-5">
                        <!-- notification-item -->
                        <div
                            class="flex md:items-center items-start gap-5 bg-background border border-border rounded-xl p-5">
                            <div class="flex items-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-warning">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                <div class="w-px h-4 bg-border"></div>
                            </div>
                            <div class="flex flex-col items-start space-y-1">
                                <div class="font-bold text-xs text-foreground">
                                    ورود به سیستم
                                </div>
                                <div class="font-medium text-xs text-muted">
                                    در صورتی که فکر میکنید این کار توسط شما انجام نشده هر چه سریع تر به
                                    بخش
                                    مدیریت نشست‌ها در بخش پنل کاربری خود در نابغه مراجعه بفرمایید و نشست
                                    مورد
                                    نظر را حذف کنید.
                                </div>
                                <div class="flex items-center gap-1 font-medium text-xs text-muted">
                                    ۶ روز پیش
                                </div>
                            </div>
                        </div>
                        <!-- end notification-item -->

                        <!-- notification-item -->
                        <div
                            class="flex md:items-center items-start gap-5 bg-background border border-border rounded-xl p-5">
                            <div class="flex items-center gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-warning">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                <div class="w-px h-4 bg-border"></div>
                            </div>
                            <div class="flex flex-col items-start space-y-1">
                                <div class="font-bold text-xs text-foreground">
                                    ورود به سیستم
                                </div>
                                <div class="font-medium text-xs text-muted">
                                    در صورتی که فکر میکنید این کار توسط شما انجام نشده هر چه سریع تر به
                                    بخش
                                    مدیریت نشست‌ها در بخش پنل کاربری خود در نابغه مراجعه بفرمایید و نشست
                                    مورد
                                    نظر را حذف کنید.
                                </div>
                                <div class="flex items-center gap-1 font-medium text-xs text-muted">
                                    ۶ روز پیش
                                </div>
                            </div>
                        </div>
                        <!-- end notification-item -->
                    </div>
                    <!-- end section:notifications:wrapper -->
                </div>
            </div>
        </div>
    </div>
</div>
