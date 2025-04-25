<div>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-xl font-bold text-center mb-6">آزمون: {{ $examUser->exam->title }}</h1>

        <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
            <div class="space-y-4">
                @for ($i = 1; $i <= $examUser->exam->question_count; $i++)
                    <div class="p-4 border rounded-xl">
                        <p class="font-semibold mb-2">سوال {{ $i }}</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                            @foreach (['1' => 'گزینه 1', '2' => 'گزینه 2', '3' => 'گزینه 3', '4' => 'گزینه 4'] as $option => $label)
                                <label class="flex items-center gap-2">
                                    <input type="radio" wire:model="answers.{{ $i }}" value="{{ $option }}">
                                    <span>{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endfor
            </div>

            <div class="mt-6 text-center">
                <button type="submit" class="px-6 py-2 bg-primary text-white rounded-xl hover:bg-primary/80 transition">
                    ثبت پاسخ‌ها
                </button>
            </div>
        </form>
    </div>
</div>
