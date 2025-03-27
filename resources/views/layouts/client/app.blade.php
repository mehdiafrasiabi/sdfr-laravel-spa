<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('layouts.client.link')
    {!! SEO::generate() !!}
</head>

<body>

<div class="flex flex-col min-h-screen bg-background">
    <!-- header -->
    <livewire:client.layout.header/>
    <!-- end header -->

    <main class="flex-auto py-5">
        {{$slot}}
    </main>

    <!-- footer -->
    <livewire:client.layout.footer/>
    <!-- end footer -->
</div>

@include('layouts.client.script')
</body>

</html>
