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
                    <a href="{{route('client.profile.plan.index')}}"
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
                    <a href="{{route('client.profile.ticket.index')}}"
                       class="w-full h-11 inline-flex items-center text-right gap-3 bg-primary rounded-full text-primary-foreground px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-5">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 0 0 1.28.53l4.184-4.183a.39.39 0 0 1 .266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0 0 12 2.25ZM8.25 8.625a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm2.625 1.125a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z"
                                  clip-rule="evenodd" />
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
                        <div class="font-black text-foreground">تیکت های من</div>

                        <a href="./profile-add-ticket.html"
                           class="inline-flex items-center justify-center gap-x-1.5 h-10 bg-primary rounded-full text-primary-foreground transition-colors hover:bg-foreground hover:text-background px-6 ms-auto">
                            <span class="font-semibold text-xs">ایجاد تیکت</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                        </a>
                    </div>
                    <!-- end section:title -->

                    <!-- section:tickets:wrapper -->
                    <div class="space-y-5">
                        <!-- table container -->
                        <div class="overflow-x-auto">
                            <!-- table -->
                            <table class="min-w-full divide-y">
                                <!-- table:thead -->
                                <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 whitespace-nowrap text-start text-xs font-semibold text-muted">
                                        شماره تیکت
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 whitespace-nowrap text-start text-xs font-semibold text-muted">
                                        عنوان تیکت
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 whitespace-nowrap text-start text-xs font-semibold text-muted">
                                        وضعیت
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 whitespace-nowrap text-start text-xs font-semibold text-muted">
                                        دپارتمان
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 whitespace-nowrap text-start text-xs font-semibold text-muted">
                                        زمان ثبت تیکت
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 whitespace-nowrap text-start text-xs font-semibold text-muted">

                                    </th>
                                </tr>
                                </thead><!-- end table:thead -->

                                <!-- table:tbody -->
                                <tbody class="divide-y">
                                <!-- table:row -->
                                <tr class="even:bg-secondary/50 odd:bg-background hover:bg-secondary">
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        12345678
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        رفع اشکال
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div
                                            class="flex items-center gap-3 text-yellow-500 before:inline-block before:w-1.5 before:h-1.5 before:bg-yellow-500 before:rounded-full before:ring before:ring-yellow-200 dark:before:ring-yellow-800">
                                            <span class="font-semibold text-xs">درانتظار پاسخ</span>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        پشتیبانی دوره
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        ۲۰ اسفند ۱۴۰۳
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <a href="./profile-show-ticket.html"
                                               class="inline-flex items-center gap-x-1 text-cyan-400"
                                               wire:navigate>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 16 16" fill="currentColor"
                                                     class="size-4">
                                                    <path fill-rule="evenodd"
                                                          d="M11.013 2.513a1.75 1.75 0 0 1 2.475 2.474L6.226 12.25a2.751 2.751 0 0 1-.892.596l-2.047.848a.75.75 0 0 1-.98-.98l.848-2.047a2.75 2.75 0 0 1 .596-.892l7.262-7.261Z"
                                                          clip-rule="evenodd" />
                                                </svg>
                                                <span
                                                    class="whitespace-nowrap font-semibold text-xs">مشاهده</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><!-- end table:row -->
                                <!-- table:row -->
                                <tr class="even:bg-secondary/50 odd:bg-background hover:bg-secondary">
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        12345678
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        رفع اشکال
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div
                                            class="flex items-center gap-3 text-green-500 before:inline-block before:w-1.5 before:h-1.5 before:bg-green-500 before:rounded-full before:ring before:ring-green-200 dark:before:ring-green-800">
                                            <span class="font-semibold text-xs">پاسخ داده شد</span>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        پشتیبانی دوره
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap font-semibold text-xs text-muted">
                                        ۲۰ اسفند ۱۴۰۳
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <a href="./profile-show-ticket.html"
                                               class="inline-flex items-center gap-x-1 text-cyan-400"
                                               wire:navigate>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 16 16" fill="currentColor"
                                                     class="size-4">
                                                    <path fill-rule="evenodd"
                                                          d="M11.013 2.513a1.75 1.75 0 0 1 2.475 2.474L6.226 12.25a2.751 2.751 0 0 1-.892.596l-2.047.848a.75.75 0 0 1-.98-.98l.848-2.047a2.75 2.75 0 0 1 .596-.892l7.262-7.261Z"
                                                          clip-rule="evenodd" />
                                                </svg>
                                                <span
                                                    class="whitespace-nowrap font-semibold text-xs">مشاهده</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr><!-- end table:row -->
                                </tbody><!-- end table:tbody -->
                            </table><!-- end table -->
                        </div><!-- end table container -->
                    </div>
                    <!-- end section:tickets:wrapper -->
                </div>
            </div>
        </div>
    </div>
</div>
