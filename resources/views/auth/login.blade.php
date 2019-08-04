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
        <!-- <link rel="stylesheet" id="css-theme" href="oneui/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body class="bg-image" style="background-image: url('../oneui/img/photos/photo6@2x.jpg');">
        <!-- Login Content -->
        <div class="bg-white  pulldown" style="opacity:0.9;">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- Login Title -->
                            <div class="text-center">
                                <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                                <h2 class="h2 font-w300 text-black-op animated fadeInUp">Sistem Automasi</h2>
                            </div>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-login form-horizontal push-30-t" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" id="idtms" name="idtms">
                                            <label for="username">{{ __('ID TMS') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="password" name="password">
                                            <label for="password">{{ __('Katalaluan') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button class="btn btn-sm btn-block btn-success" type="submit">{{ __('Log Masuk') }}</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="pulldown push-30-t text-center animated fadeInUp">
            <small class="text-muted">&copy; Jabatan Pendidikan Negeri Perak</small>
        </div>
        <!-- END Login Footer -->

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
        <script src="{{ asset('oneui/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('oneui/js/pages/base_pages_login.js') }}"></script>
    </body>
</html>