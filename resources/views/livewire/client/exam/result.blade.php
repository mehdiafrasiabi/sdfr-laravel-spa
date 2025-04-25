<div>
    <div class="max-w-3xl mx-auto py-10">
        <div class="bg-white shadow rounded-xl p-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">نتیجه آزمون شما</h2>

            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="bg-green-100 text-green-800 p-4 rounded-lg">
                    <p class="text-lg font-bold">پاسخ‌های صحیح</p>
                    <p class="text-2xl">{{ $correct }}</p>
                </div>
                <div class="bg-red-100 text-red-800 p-4 rounded-lg">
                    <p class="text-lg font-bold">پاسخ‌های غلط</p>
                    <p class="text-2xl">{{ $incorrect }}</p>
                </div>
                <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg">
                    <p class="text-lg font-bold">پاسخ‌های نزده</p>
                    <p class="text-2xl">{{ $unanswered }}</p>
                </div>
                <div class="bg-blue-100 text-blue-800 p-4 rounded-lg">
                    <p class="text-lg font-bold">درصد نهایی</p>
                    <p class="text-2xl">{{ $percentage }}%</p>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('client.exam.index') }}"
                   class="inline-block bg-primary text-white py-2 px-6 rounded-full shadow hover:bg-primary/80">
                    بازگشت به لیست آزمون‌ها
                </a>
            </div>
        </div>
    </div>
</div>
