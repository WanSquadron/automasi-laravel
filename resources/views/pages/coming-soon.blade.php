<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Sistem Automasi - Jabatan Pendidikan Negeri Perak &copy 2019</title>

        <meta name="description" content="Sistem Automasi Jabatan Pendidikan Negeri Perak">
        <meta name="author" content="Sektor Pengurusan Maklumat ICT">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        @yield('css')
        <link rel="shortcut icon" href="{{ asset('oneui/img/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('oneui/img/favicons/favicon-16x16.png') }}" sizes="16x16">
        <link rel="icon" type="image/png" href="{{ asset('oneui/img/favicons/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('oneui/img/favicons/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('oneui/img/favicons/favicon-160x160.png') }}" sizes="160x160">
        <link rel="icon" type="image/png" href="{{ asset('oneui/img/favicons/favicon-192x192.png') }}" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('oneui/img/favicons/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('oneui/img/favicons/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('oneui/img/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('oneui/img/favicons/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('oneui/img/favicons/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('oneui/img/favicons/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('oneui/img/favicons/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('oneui/img/favicons/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('oneui/img/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="{{ asset('oneui/css/bootstrap.min.css') }}">
        <link rel="stylesheet" id="css-main" href="{{ asset('oneui/css/oneui.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body class="bg-image" style="background-image: url('../oneui/img/photos/photo6@2x.jpg');">
        <!-- Coming Soon Content -->
        <div class="content pulldown bg-black-op overflow-hidden animated fadeIn">
            <div class="row text-center push">
                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                    <!-- Title -->
                    <h1 class="text-white push-5">Sistem Automasi Jabatan Pendidikan Negeri Perak</h1>
                    <h2 class="h5 text-white-op push-30">Kami sedang bekerja keras melakukan penyelenggaraan bagi memenuhi keselesaan anda! </h2>
                    <!-- END Title -->

                    <!-- Countdown -->
                    <div class="push-50">
                        <!-- Countdown.js (class is initialized in js/pages/base_pages_coming_soon.js), for more examples you can check out https://github.com/hilios/jQuery.countdown -->
                        <div class="js-countdown"></div>
                    </div>
                    <!-- END Countdown -->

                    <!-- Subscribe Form -->
                
                    <small class="text-white-op">Sektor Pengurusan Maklumat (ICT)</small>
                    <!-- END Subscribe Form -->
                </div>
            </div>
        </div>
        <!-- END Coming Soon Content -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{ asset('oneui/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/jquery.placeholder.min.js') }}"></script>
        <script src="{{ asset('oneui/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('oneui/js/app.js') }}"></script>

        <!-- Page JS Plugins -->
        <script src="{{asset('oneui/js/plugins/jquery-countdown/jquery.countdown.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('oneui/js/pages/base_pages_coming_soon.js')}}"></script>
    </body>
</html>