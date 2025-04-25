<div class="max-w-7xl space-y-14 px-4 mx-auto">
    @push('link')
        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css"/>
    @endpush
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-5 h-5">
                            <path fill-rule="evenodd"
                                  d="M1.5 7.125c0-1.036.84-1.875 1.875-1.875h6c1.036 0 1.875.84 1.875 1.875v3.75c0 1.036-.84 1.875-1.875 1.875h-6A1.875 1.875 0 0 1 1.5 10.875v-3.75Zm12 1.5c0-1.036.84-1.875 1.875-1.875h5.25c1.035 0 1.875.84 1.875 1.875v8.25c0 1.035-.84 1.875-1.875 1.875h-5.25a1.875 1.875 0 0 1-1.875-1.875v-8.25ZM3 16.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875v2.25c0 1.035-.84 1.875-1.875 1.875h-5.25A1.875 1.875 0 0 1 3 18.375v-2.25Z"
                                  clip-rule="evenodd" />
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
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-primary rounded-full text-primary-foreground px-4">
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
                        <div class="font-black text-foreground">دوره های من</div>
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
                                            class="flex items-center gap-x-2 relative rounded-full py-2 px-4"
                                            x-bind:class="activeTab === 'tabOne' ? 'text-foreground bg-background' : 'text-muted'"
                                            x-on:click="activeTab = 'tabOne'">
                                        <!-- active icon -->
                                        <span x-show="activeTab === 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z">
                                                            </path>
                                                            <path
                                                                d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z">
                                                            </path>
                                                            <path
                                                                d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                        <!-- inactive icon -->
                                        <span x-show="activeTab !== 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                             class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                        <span class="font-semibold text-sm">ارسال گزارش</span>
                                    </button>
                                </li><!-- end tabs:list:item -->

                                <!-- tabs:list:item -->
                                <li>
                                    <button type="button"
                                            class="flex items-center gap-x-2 relative rounded-full py-2 px-4"
                                            x-bind:class="activeTab === 'tabTwo' ? 'text-foreground bg-background' : 'text-muted'"
                                            x-on:click="activeTab = 'tabTwo'">
                                        <!-- active icon -->
                                        <span x-show="activeTab === 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path fill-rule="evenodd"
                                                                  d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z"
                                                                  clip-rule="evenodd"></path>
                                                            <path
                                                                d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                        <!-- inactive icon -->
                                        <span x-show="activeTab !== 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                             class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                        <span class="font-semibold text-sm">گزارش های ارسال شده</span>
                                    </button>
                                </li><!-- end tabs:list:item -->
                            </ul>
                            <!-- end tabs:list -->
                        </div>
                        <!-- end tabs:list-container -->

                        <!-- tabs:contents -->
                        <div>
                            <!-- tabs:contents:tabOne -->
                            <div class="space-y-5" x-show="activeTab === 'tabOne'">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">گزارش</div>
                                </div>

                                    <div class="flex items-start gap-3 relative bg-zinc-50 dark:bg-zinc-900 border border-border rounded-xl p-5" x-show="open" x-data="{ open: true }">
                                        <!-- alert:icon -->
                                        <span class="text-yellow-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </span><!-- alert:icon -->

                                        <!-- alert:content -->
                                        <div class="flex flex-col items-start">
                                            <!-- alert:title -->
                                            <div class="font-bold text-sm text-yellow-500 mb-2">
                                                توجه :&zwnj;
                                            </div><!-- end alert:title -->

                                            <!-- alert:desc -->
                                            <div class="font-semibold text-xs text-zinc-400">
                                                <ul>
                                                    <li>لطفا اطلاعات خود را با دقت وارد کنید.</li>
                                                </ul>
                                            </div><!-- end alert:desc -->

                                            <!-- alert:actions -->
                                            <div class="flex flex-wrap items-center gap-3 mt-5">
                                                <button type="button" class="flex items-center gap-x-1 text-zinc-400 underline-offset-1 hover:underline" x-on:click="open = false">
                                                    <span class="font-bold text-xs">فهمیدم</span>
                                                </button>
                                            </div><!-- end alert:actions -->
                                        </div><!-- end alert:content -->
                                    </div>
                                    <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))"
                                          class="space-y-5">
                                        <div class="grid sm:grid-cols-2 gap-5">
                                            <div class="space-y-1">
                                                <label for="name" class="font-medium text-xs text-muted">
                                                    توضیحات
                                                </label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="text" id="name" name="name" wire:model="name"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5"/>
                                                @error('name')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="birth_date"
                                                       class="font-medium text-xs text-muted">تاریخ گزارش :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="tel" id="report_date" dir="ltr" name="birth_date"
                                                       wire:model.lazy="birth_date"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5"/>
                                                @error('birth_date')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="flex items-center gap-1">
                                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                            </div>
                                            <div class="font-black text-foreground">آپلود فایل</div>
                                        </div>
                                        <div class="grid sm:grid-cols-2 gap-5">
                                            <div class="space-y-1">
                                                <label class="inline-flex items-center gap-x-1 border rounded-full text-muted py-2.5 px-5 cursor-pointer hover:text-foreground" for="customFile" x-data="{ files: null }">
                                                    <input type="file" class="sr-only" id="customFile" x-on:change="files = Object.values($event.target.files)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                        <path fill-rule="evenodd" d="M11.914 4.086a2 2 0 0 0-2.828 0l-5 5a2 2 0 1 0 2.828 2.828l.556-.555a.75.75 0 0 1 1.06 1.06l-.555.556a3.5 3.5 0 0 1-4.95-4.95l5-5a3.5 3.5 0 0 1 4.95 4.95l-1.972 1.972a2.125 2.125 0 0 1-3.006-3.005L9.97 4.97a.75.75 0 1 1 1.06 1.06L9.058 8.003a.625.625 0 0 0 .884.883l1.972-1.972a2 2 0 0 0 0-2.828Z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="font-semibold text-xs" x-text="files ? files.map(file => file.name).join(', ') : 'بارگذاری ..'">photo_2025-04-21_23-34-33.jpg</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="flex justify-end gap-5">
                                            <button type="submit" name="submit"
                                                    class="h-11 inline-flex items-center justify-center bg-primary rounded-full text-white px-8 mr-auto">
                                                <span class="font-semibold text-sm" wire:loading.remove>ثبت</span>
                                                <div wire:loading>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"
                                                         width="40px" height="40px"
                                                         style="shape-rendering: auto; display: block; background: transparent;">
                                                        <g>
                                                            <path stroke="none" fill="#ffffff"
                                                                  d="M19 50A31 31 0 0 0 81 50A31 34 0 0 1 19 50">
                                                                <animateTransform values="0 50 51.5;360 50 51.5"
                                                                                  keyTimes="0;1"
                                                                                  repeatCount="indefinite"
                                                                                  dur="0.8130081300813008s"
                                                                                  type="rotate"
                                                                                  attributeName="transform"/>
                                                            </path>
                                                            <g/>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </form>

                            </div>
                            <!-- end tabs:contents:tabOne -->

                            <!-- tabs:contents:tabTwo -->
                            <div x-show="activeTab === 'tabTwo'">
                                <div
                                    class="flex flex-col items-center justify-center w-full max-w-md space-y-12 mx-auto">
                                    <img src="/client/assets/images/theme/empty.svg"
                                         class="w-full max-w-xs opacity-35" alt="..." />
                                    <div class="text-center space-y-3">
                                        <h2 class="font-bold text-xl text-foreground">
                                            موردی یافت نشد :)
                                        </h2>
                                        <p class="font-semibold text-sm text-muted">
                                            هنوز دوره ای به صورت کامل مشاهده نکرده اید،بعد از اتمام دوره
                                            هایی که در آن شرکت کرده اید می توانید از این بخش برای
                                            گرفتن مدرک اقدام کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end tabs:contents:tabTwo -->
                        </div><!-- end tabs:contents -->
                    </div><!-- end tabs container -->
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/persian-date/dist/persian-date.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#report_date").persianDatepicker({
                    format: "YYYY/MM/DD",
                    initialValueType: 'gregorian',
                    calendarType: 'persian',
                    autoClose: true
                });
            });
        </script>
    @endpush
</div>
