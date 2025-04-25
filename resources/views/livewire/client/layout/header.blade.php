<div>
    <header class="bg-background/80 backdrop-blur-xl border-b border-border sticky top-0 z-30"
            x-data="{ offcanvasOpen: false, openSearchBox: false }">
        <!-- container -->
        <div class="max-w-7xl relative px-4 mx-auto">
            <div class="flex items-center gap-8 h-20">
                <div class="flex items-center gap-3">
                    <!-- offcanvas:button -->
                    <button type="button"
                            class="lg:hidden inline-flex items-center justify-center relative w-10 h-10 bg-secondary rounded-full text-foreground"
                            x-on:click="offcanvasOpen = true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                    </button>
                    <!-- end offcanvas:button -->
                    <a href="{{route('client.home')}}" class="inline-flex items-center gap-2 text-primary">

                        <span class="flex flex-col items-start">
                        <img src="/client/assets/images/theme/intro/header.png" width="90px">
                        </span>
                    </a>
                </div>
                <div class="lg:flex hidden items-center gap-5">
                    <!-- categories -->
                    <div class="relative group/categories">
                        <a href="{{route('client.home')}}"
                           class="inline-flex items-center gap-1 text-muted transition-colors hover:text-foreground">
                            <span class="font-semibold">صفحه اصلی</span>
                            {{--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                            {{--                                 stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                            {{--                                <path stroke-linecap="round" stroke-linejoin="round"--}}
                            {{--                                      d="m19.5 8.25-7.5 7.5-7.5-7.5"/>--}}
                            {{--                            </svg>--}}
                        </a>
                        {{--                        <div--}}
                        {{--                            class="absolute right-0 top-full opacity-0 invisible transition-all group-hover/categories:opacity-100 group-hover/categories:visible pt-5 z-10">--}}
                        {{--                            <ul--}}
                        {{--                                class="flex flex-col relative w-56 min-h-[300px] bg-background border border-border shadow-2xl shadow-black/5">--}}
                        {{--                                <li class="group">--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">برنامه نویسی وب</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                    <ul--}}
                        {{--                                        class="absolute -top-px -bottom-px right-full flex flex-wrap flex-col w-96 bg-background border border-border shadow-2xl shadow-black/5 space-y-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible px-3 pt-8 pb-3">--}}
                        {{--                                        <li class="absolute top-2">--}}
                        {{--                                                <span class="font-bold text-sm text-muted cursor-default">محبوب ترین--}}
                        {{--                                                    موضوعات</span>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">جاوااسکریپت</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">نود جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">ریکت جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">ویو جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">تیلویند</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">بوت استرپ</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">سی اس اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">اچ تی ام ال</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">پی اچ پی</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">لاراول</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">لایووایر</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">آلپاین جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">دات نت</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="group">--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">دیتا ساینس</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                    <ul--}}
                        {{--                                        class="absolute -top-px -bottom-px right-full flex flex-wrap flex-col w-96 bg-background border border-border shadow-2xl shadow-black/5 space-y-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible px-3 pt-8 pb-3">--}}
                        {{--                                        <li class="absolute top-2">--}}
                        {{--                                                <span class="font-bold text-sm text-muted cursor-default">محبوب ترین--}}
                        {{--                                                    موضوعات</span>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">جاوااسکریپت</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">نود جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">ریکت جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">ویو جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">پی اچ پی</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">لاراول</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">لایووایر</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">آلپاین جی اس</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="w-1/2">--}}
                        {{--                                            <a href="#"--}}
                        {{--                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">--}}
                        {{--                                                <span class="font-semibold text-sm">دات نت</span>--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">زبانهای برنامه نویسی</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">توسعه بازی</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">برنامه نویسی موبایل</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">طراحی دیتابیس</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#"--}}
                        {{--                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">--}}
                        {{--                                        <span class="font-semibold text-sm">تست نویسی</span>--}}
                        {{--                                        <span class="absolute left-3">--}}
                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                        {{--                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                        {{--                                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
                        {{--                                                </svg>--}}
                        {{--                                            </span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>
                    <!-- end categories -->

                    <!-- menu -->
                    <ul class="flex items-center gap-5">
                        <li>
                            <a href="{{route('client.shop')}}"
                               class="inline-flex text-muted transition-colors hover:text-foreground">
                                <span class="font-semibold">مشاوره</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.about-us')}}"
                               class="inline-flex text-muted transition-colors hover:text-foreground">
                                <span class="font-semibold">درباره ما</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.contact-us')}}"
                               class="inline-flex text-muted transition-colors hover:text-foreground">
                                <span class="font-semibold">ارتباط با ما</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.terms')}}"
                               class="inline-flex text-muted transition-colors hover:text-foreground">
                                <span class="font-semibold">قوانین و مقررات</span>
                            </a>
                        </li>
                    </ul>
                    <!-- end menu -->
                </div>

                <div class="flex items-center md:gap-5 gap-3 mr-auto">
                    <!-- darkMode:button -->
                    <button type="button"
                            class="hidden lg:inline-flex items-center justify-center w-10 h-10 bg-secondary rounded-full text-foreground"
                            id="dark-mode-button">
                            <span class="light-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
                                </svg>
                            </span>
                        <span class="dark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
                                </svg>
                            </span>
                    </button>
                    <!-- end darkMode:button -->

                    <!-- openSearchBox:button -->

                    <!-- end openSearchBox:button -->
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{route('client.checkout.cart')}}"
                           class="inline-flex items-center justify-center relative w-10 h-10 bg-secondary rounded-full text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                            </svg>
                            <span class="absolute -top-1 left-0 flex h-5 w-5">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span
                                    class="relative inline-flex items-center justify-center rounded-full h-5 w-5 bg-primary text-primary-foreground font-bold text-xs">{{ $cart }}</span>
                            </span>
                        </a>
                    @endif

                    @if(\Illuminate\Support\Facades\Auth::check())
                        <!-- user:dropdown -->
                        <div class="relative" x-data="{ isOpen: false }">
                            <button class="flex items-center sm:gap-3 gap-1" x-on:click="isOpen = !isOpen">
                                <span
                                    class="inline-flex items-center justify-center w-9 h-9 bg-secondary rounded-full text-foreground">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                                    </svg>
                                </span>
                                <span class="xs:flex flex-col items-start hidden text-xs space-y-1">
                                    <span class="font-semibold text-foreground"> {{auth()->user()->name}} عزیز</span>
                                    <span class="font-semibold text-muted">خوش آمـــدی</span>
                                </span>
                                <span class="text-foreground transition-transform"
                                      x-bind:class="isOpen ? 'rotate-180' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                            <div class="absolute top-full left-0 pt-3" x-show="isOpen"
                                 x-on:click.outside="isOpen = false">
                                <div
                                    class="w-56 bg-background border border-border rounded-xl shadow-2xl shadow-black/5 p-3">
                                    <a href="{{route('client.profile.dashboard')}}"
                                       class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"/>
                                        </svg>
                                        <span class="font-semibold text-xs">مشاهده پروفایل</span>
                                    </a>

                                    <a href="{{route('client.profile.notification')}}"
                                       class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0">
                                            </path>
                                        </svg>
                                        <span class="font-semibold text-xs">اعلانات</span>
                                    </a>
                                    <a href="{{route('client.profile.plan')}}"
                                       class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>
                                        </svg>
                                        <span class="font-semibold text-xs">برنامه و گزارش های من</span>
                                    </a>
                                    <button type="button"
                                            class="flex items-center gap-2 w-full text-red-500 transition-colors hover:text-red-700 px-3 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"/>
                                        </svg>
                                        <a href="{{route('client.logout')}}" class="font-semibold text-xs">خروج از
                                            حساب</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end user:dropdown -->
                    @else
                        <!-- login-register:button -->
                        <a href="{{route('client.auth.index')}}"
                           class="inline-flex items-center justify-center gap-1 h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path fill-rule="evenodd"
                                      d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold text-sm">حساب کاربری</span>
                        </a>
                        <!-- end login-register:button -->
                    @endif


                </div>
            </div>

            <!-- searchBox -->
            <div class="absolute inset-x-4 hidden lg:flex flex-col h-full bg-background transition-all"
                 x-bind:class="openSearchBox ? 'top-0' : '-top-full'">
                <form action="#" class="h-full">
                    <div class="flex items-center h-full relative">
                        <input type="text"
                               class="form-input w-full !ring-0 !ring-offset-0 bg-background border-0 focus:border-0 text-foreground"
                               placeholder="نام دوره،مقاله و یا دسته بندی را وارد نمایید.."/>
                        <button type="button"
                                class="absolute left-0 inline-flex items-center justify-center w-9 h-9 bg-secondary rounded-full text-muted transition-colors hover:text-red-500"
                                x-on:click="openSearchBox = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <!-- end searchBox -->
        </div>
        <!-- end container -->

        <!-- offcanvas -->
        <div x-cloak>
            <!-- offcanvas:box -->
            <div
                class="fixed inset-y-0 right-0 xs:w-80 w-72 h-screen bg-background rounded-l-2xl overflow-y-auto transition-transform z-50"
                x-bind:class="offcanvasOpen ? '!translate-x-0' : 'translate-x-full'">
                <!-- offcanvas:header -->
                <div class="flex items-center justify-between gap-x-4 sticky top-0 bg-background p-4 z-10">
                    <a href="{{route('client.home')}}" class="inline-flex items-center gap-2 text-primary">

                        <span class="flex flex-col items-start">
                                <img src="/client/assets/images/theme/intro/header.png" width="90px">
                            </span>
                    </a>

                    <!-- offcanvas:close-button -->
                    <button x-on:click="offcanvasOpen = false"
                            class="text-foreground focus:outline-none hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button><!-- end offcanvas:close-button -->
                </div><!-- end offcanvas header -->

                <!-- offcanvas:content -->
                <div class="space-y-5 p-4">

                    <div class="h-px bg-border"></div>
                    <label class="relative w-full flex items-center justify-between cursor-pointer">
                        <span class="font-bold text-sm text-foreground">تم تاریک</span>
                        <input type="checkbox" class="sr-only peer" id="dark-mode-checkbox"/>
                        <div
                            class="w-11 h-5 relative bg-background border-2 border-border peer-focus:outline-none rounded-full peer peer-checked:after:left-[26px] peer-checked:after:bg-background after:content-[''] after:absolute after:left-0.5 after:top-0.5 after:bg-border after:rounded-full after:h-3 after:w-3 after:transition-all peer-checked:bg-primary peer-checked:border-primary">
                        </div>
                    </label>
                    <div class="h-px bg-border"></div>
                    <ul class="flex flex-col space-y-1">
                        <li>
                            <a href="{{route('client.home')}}"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                          d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold text-xs">صفحه اصلی</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.shop')}}"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                          d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold text-xs">مشاوره</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.about-us')}}"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                    </path>
                                </svg>
                                <span class="font-semibold text-xs">درباره ما</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.contact-us')}}"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                          d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold text-xs">ارتباط با ما</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.terms')}}"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                    </path>
                                </svg>
                                <span class="font-semibold text-xs">قوانین و مقررات</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end offcanvas:content -->
            </div><!-- end offcanvas:box -->

            <!-- offcanvas:overlay -->
            <div class="fixed inset-0 h-screen bg-secondary/80 cursor-pointer transition-all duration-1000 z-40"
                 x-bind:class="offcanvasOpen ? 'opacity-100 visible' : 'opacity-0 invisible'"
                 x-on:click="offcanvasOpen = false">
            </div><!-- end offcanvas:overlay -->
        </div><!-- end offcanvas -->
    </header>
</div>
