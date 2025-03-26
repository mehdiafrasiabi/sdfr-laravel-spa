
<div>
    <div>

            <div class="flex flex-wrap items-center justify-center gap-10 md:pb-10 pb-5 md:px-10 px-5">
                @foreach($stories as $item)
                <div
                    class="flex flex-col items-center justify-center text-center text-emerald-500 space-y-3 cursor-default animate-pulse">
                                <span style="cursor: pointer;margin-top: 18px"  class="flex items-center justify-center w-20 h-20 bg-background rounded-full"  onclick="openModal('/stories/story/{{$item->story}}')">
                                    <img class="flex items-center justify-center w-20 h-20 bg-background rounded-full" src="/stories/thumbnail/{{$item->thumbnail}}">
                                </span>
                    <span class="font-bold text-sm line-clamp-1">{{$item->title}}</span>
                </div>
                @endforeach

            </div>

    </div>
    <div class="modal" id="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <video id="video" width="300" controls>
                <source id="videoSource" src="" type="video/mp4">
                مرورگر شما از ویدیو پشتیبانی نمی‌کند.
            </video>
            <div class="like" onclick="toggleLike(this)">&#9829;</div>
        </div>
    </div>
</div>
