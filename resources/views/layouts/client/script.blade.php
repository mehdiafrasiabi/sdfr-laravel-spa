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
    window.addEventListener('add-to-cart', function() {
        Toastify({
            text:'با موفقیت به سبد خرید شما اضافه شد ',
            duration: 4000,
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            }
        }).showToast();
    });
</script>
@stack('script')
