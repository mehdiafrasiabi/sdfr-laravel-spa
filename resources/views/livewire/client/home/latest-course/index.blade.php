<div>
    <div class="space-y-8">
        <!-- section:title -->
        <div class="flex items-center justify-between gap-8 bg-gradient-to-l from-secondary to-background rounded-2xl p-5">
            <div class="flex items-center gap-5">
                                <span
                                    class="flex items-center justify-center w-12 h-12 bg-primary text-primary-foreground rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                <div class="flex flex-col font-black text-2xl space-y-2">
                    <span class="font-black xs:text-2xl text-lg text-primary">آخرین دوره های</span>
                    <span class="font-semibold xs:text-base text-sm text-foreground">منتشر شده</span>
                </div>
            </div>
            <a href="/client/series.html"
               class="sm:w-auto w-11 h-11 inline-flex items-center justify-center gap-1 bg-secondary rounded-full text-foreground transition-colors hover:text-primary sm:px-4">
                <span class="font-semibold text-sm sm:block hidden">مشاهده همه</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                     class="w-5 h-5">
                    <path fill-rule="evenodd"
                          d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <!-- end section:title -->

        <!-- section:latest-courses:slider -->
        <div class="swiper col3-swiper-slider">
            <div class="swiper-wrapper">
               @foreach($latestProducts as $item)
                    <div class="swiper-slide">
                        <!-- course:card -->
                        <div class="relative">
                            <div class="relative z-10">
                                <a href="{{route('client.product',$item->p_code)}}/{{$item->seo->slug}}" class="block">
                                    <img src="/products/{{$item->id}}/photo/{{@$item->coverImage->path}}" class="max-w-full rounded-3xl"
                                         alt="{{$item->seo->slug}}"/>
                                </a>
                                <a href="{{route('client.product',$item->p_code)}}/{{$item->seo->slug}}"
                                   class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                              d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-semibold text-sm">{{$item->tag}}</span>
                                </a>
                            </div>
                            <div class="bg-background rounded-b-3xl -mt-12 pt-12">
                                <div
                                    class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                                    <div class="flex items-center gap-2">
                                        <span class="block w-1 h-1 bg-success rounded-full"></span>
                                        <span class="font-bold text-xs text-success">{{$item->title}}</span>
                                    </div>
                                    <h2 class="font-bold text-sm">
                                        <a href="{{route('client.product',$item->p_code)}}/{{$item->seo->slug}}"
                                           class="line-clamp-1 text-foreground transition-colors hover:text-primary">
                                            {{$item->name}}
                                        </a>
                                    </h2>
                                </div>
                                <div class="space-y-3 p-5">
                                    <div class="flex flex-wrap items-center gap-3">
                                        <div class="flex items-center gap-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path
                                                    d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                </path>
                                                <path
                                                    d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                </path>
                                            </svg>
                                            <span class="font-semibold text-xs">{{$item->meeting_time}}</span>
                                        </div>
                                        <span class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                        <div class="flex items-center gap-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="font-semibold text-xs">{{$item->course_time}}</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-5">
                                        <div class="flex items-center gap-3">

                                        </div>
                                        <div class="flex flex-col items-end justify-center h-14">
                                            <div class="flex items-center gap-1">
                                                            <span
                                                                class="font-black text-xl text-foreground">{{number_format($item->price)}}</span>
                                                <span class="text-xs text-muted">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 mt-3">
                                        <a href="{{route('client.product',$item->p_code)}}/{{$item->seo->slug}}"
                                           class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                        <span class="line-clamp-1 font-semibold text-sm">مشاهده
                                                            دوره</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                      d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                        <button type="button"
                                                class="flex-shrink-0 w-11 h-11 inline-flex items-center justify-center bg-secondary rounded-full text-muted transition-colors hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" class="w-5 h-5">
                                                <path
                                                    d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end course:card -->
                    </div>
               @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!-- end section:latest-courses:slider -->
    </div>

</div>
