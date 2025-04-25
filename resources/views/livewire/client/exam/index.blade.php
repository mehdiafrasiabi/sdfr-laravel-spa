<div>
    @extends('layouts.client.app')

    @section('content')
        <div class="container py-6">
            <h2 class="text-xl font-bold mb-4">آزمون‌های من</h2>

            @if($exams->count())
                <div class="overflow-x-auto">
                    <table class="w-full table-auto border-collapse">
                        <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-right">عنوان آزمون</th>
                            <th class="px-4 py-2 text-right">زمان پایان</th>
                            <th class="px-4 py-2 text-right">وضعیت</th>
                            <th class="px-4 py-2 text-right">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($exams as $examUser)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $examUser->exam->title }}</td>
                                <td class="px-4 py-2">{{ jdate($examUser->exam->end_time)->format('Y/m/d H:i') }}</td>
                                <td class="px-4 py-2">
                                    @if($examUser->answers()->exists())
                                        <span class="text-green-600 font-semibold">پاسخ داده شده</span>
                                    @else
                                        <span class="text-yellow-500 font-semibold">در انتظار پاسخ</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2">
                                    @if($examUser->answers()->exists())
                                        <a href="{{ route('client.exam.result', $examUser->slug) }}" class="text-blue-500 underline">مشاهده نتایج</a>
                                    @else
                                        <a href="{{ route('client.exam.form', $examUser->slug) }}" class="text-indigo-600 underline">شروع آزمون</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-gray-600">هیچ آزمونی برای شما ثبت نشده است.</p>
            @endif
        </div>
    @endsection
</div>
