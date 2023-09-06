<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M4NFLTV');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '466315718501547');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=466315718501547&ev=PageView&noscript=1" /></noscript>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="dailykimcuong.com - Nơi cung cấp kim cương cho các nền tảng livestream với chiết khấu cao, giá cực tốt">
    <meta property="og:description" content="DailyKimCuong.com - Nơi cung cấp và mua bán kim cương chất lượng cao với giá cực tốt trên các nền tảng livestream Nimo, Bigo, Mico. Với chiết khấu cao, chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm trực tuyến đáng tin cậy và tiết kiệm nhất. Ghé thăm trang web của chúng tôi ngay để khám phá thêm!">
    <meta name="description" content="DailyKimCuong.com - Nơi cung cấp và mua bán kim cương chất lượng cao với giá cực tốt trên các nền tảng livestream Nimo, Bigo, Mico. Với chiết khấu cao, chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm trực tuyến đáng tin cậy và tiết kiệm nhất. Ghé thăm trang web của chúng tôi ngay để khám phá thêm!" />
    <meta property="og:image" content="{{ asset('images/contact/banner-popup.png') }}" />
    <link rel="stylesheet" href="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/web/index.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/contact/logo-diamond.png') }}" type="images/x-icon">
    <title>dailykimcuong.com</title>
</head>
<?php header('Access-Control-Allow-Origin: *'); ?>
<body>

@yield('menu')
<main>
    @yield('content')
</main>
@yield('footer')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('slick/slick/slick.min.js') }}"></script>
<script src="https://unpkg.com/vue@2"></script>
<script src="https://unpkg.com/jquery@3.1.1/dist/jquery.js"></script>
<script>
    // document.addEventListener('DOMContentLoaded', () => {
    //
    //     let app = new Vue({
    //         el: '#header',
    //         data: {
    //             name: '',
    //             user_flag: false,
    //             user_data: {},
    //             user_data_local_storage: {},
    //             errorMessage: '',
    //             successMessage: '',
    //             keywords: '',
    //         },
    //         created() {
    //             let vm = this;
    //         },
    //         mounted() {
    //
    //         },
    //         methods: {}
    //     })
    // })
</script>

</body>


</html>
