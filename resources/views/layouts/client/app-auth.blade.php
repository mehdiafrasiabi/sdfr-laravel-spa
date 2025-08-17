<!DOCTYPE html>
<html lang="fa" dir="rtl"  class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/client/assets/images/favicon.svg" />
    <link rel="stylesheet" href="/client/assets/css/dependencies/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/client/assets/css/dependencies/plyr.min.css" />
    <link rel="stylesheet" href="/client/assets/css/fonts.css" />
    <link rel="stylesheet" href="/client/assets/css/app.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    @stack('link')
    <title>ورود و ثبت نام</title>
</head>

<body class="dark">

{{$slot}}

<script src="/client/assets/js/dependencies/alpinejs.min.js"></script>
<script src="/client/assets/js/dependencies/swiper-bundle.min.js"></script>
<script src="/client/assets/js/dependencies/plyr.min.js"></script>
<script src="/client/assets/js/app.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    window.addEventListener('success', function(event) {
        Toastify({
            text:event.detail,
            duration: 3000,
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            }
        }).showToast();
    });
    window.addEventListener('error', function(event) {
        Toastify({
            text:event.detail,
            duration: 3000,
            style: {
                background: "linear-gradient(to right, #d61212, #ff0000)",
            }
        }).showToast();
    });

</script>
</body>
@stack('script')
</html>
