<div>
    <div class="min-h-screen flex items-center justify-center bg-background p-5">
        @if(!$submitCodeView)
            <div class="w-full max-w-sm space-y-5">
                <div class="bg-gradient-to-b from-secondary to-background rounded-3xl space-y-5 px-5 pb-5">
                    <div class="bg-background text-center rounded-b-3xl space-y-2 p-5">
                        <a href="{{route('client.home')}}" class="inline-flex items-center gap-2 text-primary">

                        <span class="flex flex-col items-start">
                                <img src="/client/assets/images/theme/intro/header.png" width="90px">
                        </span>
                        </a>
                    </div>

                    <!-- auth:verification:form -->
                    <form class="space-y-3" wire:submit="sendSms(Object.fromEntries(new FormData($event.target)))" method="post">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                            </div>
                            <div class="font-black text-foreground">ورود یا ثبت نام</div>
                        </div>
                        <div class="text-sm text-muted space-y-3">
                            <p>درود 👋</p>
                            <p>لطفا شماره موبایل خود را وارد کنید</p>
                        </div>

                        <!-- form:field:wrapper -->
                        <div class="flex items-center relative">
                            <input type="text" dir="ltr" name="mobile"
                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground placeholder:text-right px-5" />
                        </div>
                        @error('mobile')
                        <div style="color: red">{{$message}}</div>
                        @enderror
                        <!-- end form:field:wrapper -->

                        <!-- form:submit button -->
                        <button type="submit" name="submit"
                                class="flex items-center justify-center gap-1 w-full h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                            <div wire:loading.remove>
                                <span class="font-semibold text-sm">ورود</span>
                            </div>
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
                        <a href="{{route('client.gmail')}}"
                                class="flex items-center justify-center gap-1 w-full h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                            <div>

                                <span class="font-semibold text-center">ورود یا ثبت نام </span>


                                <svg style="display: inline" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 50 50">
                                    <path d="M 43.753906 6.4023438 C 42.53621 6.3489969 41.294792 6.712898 40.271484 7.46875 L 37.525391 9.4960938 L 25 18.755859 L 12.591797 9.5839844 A 1.0001 1.0001 0 0 0 11.949219 9.3007812 L 12.199219 9.3007812 L 9.734375 7.4765625 C 8.7104042 6.7188363 7.4671493 6.3528895 6.2480469 6.40625 C 5.0289444 6.4596105 3.8349462 6.9314667 2.9082031 7.8457031 C 1.7309454 9.0063798 1 10.629831 1 12.410156 L 1 15.84375 A 1.0001 1.0001 0 0 0 1 16.138672 L 1 39.5 C 1 41.421188 2.5788117 43 4.5 43 L 12 43 A 1.0001 1.0001 0 0 0 13 42 L 13 25.373047 L 24.40625 33.804688 A 1.0001 1.0001 0 0 0 25.59375 33.804688 L 37 25.373047 L 37 42 A 1.0001 1.0001 0 0 0 38 43 L 45.5 43 C 47.421188 43 49 41.421188 49 39.5 L 49 16.119141 A 1.0001 1.0001 0 0 0 49 15.859375 L 49 12.410156 C 49 10.6517 48.290455 9.0357821 47.128906 7.8730469 C 47.095336 7.8394769 47.084086 7.83018 47.097656 7.84375 A 1.0001 1.0001 0 0 0 47.091797 7.8378906 C 46.165242 6.9256756 44.971603 6.4556905 43.753906 6.4023438 z M 43.644531 8.4003906 C 44.400835 8.4300436 45.134049 8.7168876 45.689453 9.2636719 C 45.708363 9.2823439 45.722171 9.2964424 45.712891 9.2871094 C 46.50934 10.084374 47 11.188613 47 12.410156 L 47 15.496094 L 39 21.408203 L 39 11 A 1.0001 1.0001 0 0 0 38.996094 10.898438 L 41.458984 9.078125 A 1.0001 1.0001 0 0 0 41.460938 9.078125 C 42.109578 8.598977 42.888228 8.3707375 43.644531 8.4003906 z M 6.3574219 8.40625 C 7.1145694 8.37661 7.8958927 8.6037105 8.5449219 9.0839844 L 11.003906 10.902344 A 1.0001 1.0001 0 0 0 11 11 L 11 21.408203 L 3 15.496094 L 3 12.410156 C 3 11.174482 3.5017577 10.068855 4.3125 9.2695312 C 4.8677569 8.7217677 5.6002743 8.4358895 6.3574219 8.40625 z M 37 12.371094 L 37 22.886719 L 25 31.755859 L 13 22.886719 L 13 12.373047 L 24.40625 20.804688 A 1.0001 1.0001 0 0 0 25.59375 20.804688 L 37 12.371094 z M 3 17.982422 L 11 23.896484 L 11 41 L 4.5 41 C 3.6591883 41 3 40.340812 3 39.5 L 3 17.982422 z M 47 17.982422 L 47 39.5 C 47 40.340812 46.340812 41 45.5 41 L 39 41 L 39 23.896484 L 47 17.982422 z"></path>
                                </svg>

                            </div>
                        </a>
                        <!-- end form:submit button -->
                    </form>
                    <!-- end auth:verification:form -->
                </div>
                <div class="bg-secondary rounded-xl space-y-5 p-5">
                    <div class="font-medium text-xs text-center text-muted">
                        ورود شما به معنای پذیرش <a href="{{route('client.terms')}}"
                                                   class="text-foreground transition-colors hover:text-primary hover:underline">شرایط</a> و
                        <a href="{{route('client.terms')}}" class="text-foreground transition-colors hover:text-primary hover:underline">قوانین
                            حریم خصوصی</a> است.
                    </div>
                </div>
            </div>
        @else
            <div class="w-full max-w-sm space-y-5">
                <div class="bg-gradient-to-b from-secondary to-background rounded-3xl space-y-5 px-5 pb-5">
                    <div class="bg-background text-center rounded-b-3xl space-y-2 p-5">
                        <a href="{{route('client.home')}}" class="inline-flex items-center gap-2 text-primary">

                        <span class="flex flex-col items-start">
                                <img src="/client/assets/images/theme/intro/header.png" width="90px">
                        </span>
                        </a>
                    </div>

                    <!-- auth:verification:form -->
                    <form class="space-y-3" wire:submit="submitCode(Object.fromEntries(new FormData($event.target)))" method="post">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                            </div>
                            <div class="font-black text-foreground">اعتبارسنجی</div>
                        </div>
                        <div class="text-sm text-muted space-y-3">
                            <p>کاربر عزیز ،</p>
                            <p>کد تایید اعتبارسنجی به شماره {{$userMobile}} ارسال شد .</p>
                        </div>

                        <!-- form:field:wrapper -->
                        <div class="flex items-center relative">
                            <input type="text" dir="ltr" name="code"
                                   class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground placeholder:text-right px-5" />
                        </div>
                        @if($codeErrorMessage)
                            <div style="color: red">{{$codeErrorMessage}}</div>
                        @endif
                        <hr>
                        @error('code')
                        <div style="color: red">{{$message}}</div>
                        @enderror
                        <!-- end form:field:wrapper -->

                        <!-- form:submit button -->
                        <button type="submit" name="submit"
                                class="flex items-center justify-center gap-1 w-full h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                            <div wire:loading.remove>
                                <span class="font-semibold text-sm">برو بریم</span>
                            </div>
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
                        <!-- end form:submit button -->
                    </form>
                    <!-- end auth:verification:form -->
                </div>
            </div>

        @endif
    </div>
</div>
