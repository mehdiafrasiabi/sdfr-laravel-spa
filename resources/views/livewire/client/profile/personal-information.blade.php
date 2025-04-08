<div class="max-w-7xl space-y-14 px-4 mx-auto">
    @push('link')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css" />
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>
                        <span class="font-semibold text-xs">پیشخوان</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.personal')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">احراز هویت VIP</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.wishlist')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                            </path>
                        </svg>
                        <span class="font-semibold text-xs">علاقمندی ها</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.financial.index')}}"
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
                    <a href="./profile-comments.html"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                        <span class="font-semibold text-xs">دیدگاه و پرسشهای شما</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.profile.ticket.index')}}"
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

                    <!-- end section:title -->

                    <!-- tabs container -->
                    <div class="space-y-5" x-data="{ activeTab: 'tabOne'}">
                        <!-- tabs:list-container -->

                        <!-- tabs:contents -->
                        <div class="bg-background rounded-3xl p-5">
                            <!-- tabs:contents:tabOne -->
                            <div class="space-y-5" x-show="activeTab === 'tabOne'">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">اطلاعات فردی</div>
                                </div>

                                @if(!empty($personals))
                                    <div
                                        class="flex flex-col items-center justify-center w-full max-w-md space-y-12 mx-auto">
                                        <img src="/client/assets/images/theme/empty.svg"
                                             class="w-full max-w-xs opacity-35" alt="..." />
                                        <div class="text-center space-y-3">
                                            <h2 class="font-bold text-xl text-foreground">
                                                سپاس از شما !
                                            </h2>
                                            <p class="font-semibold text-sm text-muted">
                                            </p>
                                        </div>
                                    </div>
                                @else
                                    <form  wire:submit="submit(Object.fromEntries(new FormData($event.target)))" class="space-y-5">
                                        <div class="grid sm:grid-cols-2 gap-5">
                                            <div class="space-y-1">
                                                <label for="name" class="font-medium text-xs text-muted">نام
                                                    و
                                                    نام خانوادگی (فارسی) :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="text" id="name" name="name" wire:model="name"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('name')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="father_name"
                                                       class="font-medium text-xs text-muted">نام پدر :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="text" id="father_name" dir="rtl" name="fName" wire:model="fName"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('fName')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror

                                            </div>
                                            <div class="space-y-1">
                                                <label for="code_mell" class="font-medium text-xs text-muted">کد ملی :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="tel" id="code_mell" dir="ltr" name="codeMell" wire:model="codeMell" maxlength="10"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('codeMell')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="place_of_birth"
                                                       class="font-medium text-xs text-muted">محل تولد :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="tel" id="place_of_birth" dir="rtl" name="placeOfBirth" wire:model="placeOfBirth"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('placeOfBirth')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="birth_date"
                                                       class="font-medium text-xs text-muted">تاریخ تولد :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="tel" id="birth_date" dir="ltr" name="birth_date" wire:model.lazy="birth_date"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('birth_date')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="stateId"
                                                       class="font-medium text-xs text-muted">استان(محل زندگی) :</label>
                                                <sup class="text-red-500">*</sup>
                                                <select id="stateId" wire:model="province"  name="province" wire:change="getCity($event.target.value)"
                                                        class="form-select w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5">
                                                    @foreach($provinces as $item)
                                                        <option {{$province == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('province')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="cityId"
                                                       class="font-medium text-xs text-muted">شهر(محل زندگی) :</label>
                                                <sup class="text-red-500">*</sup>
                                                <select id="cityId" name="city" wire:model="city"
                                                        class="form-select w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5">
                                                    @foreach($cities as $item)
                                                        <option {{$city == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="space-y-1">
                                            <label for="address" class="font-medium text-xs text-muted">ادرس محل زندگی :</label>
                                            <sup class="text-red-500">*</sup>
                                            <textarea rows="5" id="address" name="address" wire:model="address"
                                                      class="form-textarea w-full !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5"></textarea>
                                            @error('address')
                                            <div class="font-medium text-xs text-muted text-red-500">
                                                {{$message}}
                                            </div>
                                            @enderror
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
                                                <label for="father_mobile" class="font-medium text-xs text-muted">موبایل پدر :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="tel" dir="ltr" id="father_mobile" name="fMobile" wire:model="fMobile" maxlength="11"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('fMobile')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="space-y-1">
                                                <label for="mother_mobile" class="font-medium text-xs text-muted">موبایل مادر :</label>
                                                <sup class="text-red-500">*</sup>
                                                <input type="tel" dir="ltr" id="mother_mobile" name="mMobile" wire:model="mMobile" maxlength="11"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                @error('mMobile')
                                                <div class="font-medium text-xs text-muted text-red-500">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex justify-end gap-5">
                                            <button type="submit" name="submit"
                                                    class="h-11 inline-flex items-center justify-center bg-primary rounded-full text-white px-8 mr-auto">
                                                <span class="font-semibold text-sm" wire:loading.remove>ثبت</span>
                                                <div wire:loading>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="40px" height="40px"
                                                         style="shape-rendering: auto; display: block; background: transparent;">
                                                        <g>
                                                            <path stroke="none" fill="#ffffff"
                                                                  d="M19 50A31 31 0 0 0 81 50A31 34 0 0 1 19 50">
                                                                <animateTransform values="0 50 51.5;360 50 51.5" keyTimes="0;1"
                                                                                  repeatCount="indefinite" dur="0.8130081300813008s"
                                                                                  type="rotate" attributeName="transform"/>
                                                            </path>
                                                            <g/>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </form>

                                @endif
                            </div>
                            <!-- end tabs:contents:tabOne -->

                            <!-- tabs:contents:tabTwo -->

                            <!-- tabs:contents:tabTwo -->

                            <!-- end tabs:contents:tabTwo -->

                            <!-- tabs:contents:tabTwo -->
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
                $(document).ready(function() {
                    $("#birth_date").persianDatepicker({
                        format: "YYYY/MM/DD",
                        initialValueType: 'gregorian',
                        calendarType: 'persian',
                        autoClose: true
                    });
                });
            </script>
    @endpush
</div>
