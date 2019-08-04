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
        <link rel="stylesheet" href="{{ asset('oneui/js/plugins/sweetalert2/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/oneui/js/plugins/datatables/jquery.dataTables.min.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="oneui/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group pull-right">
                                <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                    <li>
                                        <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="{{ asset('oneui/css/themes/amethyst.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="{{ asset('oneui/css/themes/city.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="{{ asset('oneui/css/themes/flat.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="{{ asset('oneui/css/themes/modern.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="{{ asset('oneui/css/themes/smooth.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class="h5 text-white" href="/home">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">automasi</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        @if(Auth::User()->hasRole == 'user')
                        <div class="side-content">
                            <ul class="nav-main">
                                <li>
                                    <a href="/home"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/e-aduan"><span class="sidebar-mini-hide">e-Aduan</span></a>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/e-bilik"><span class="sidebar-mini-hide">e-Bilik</span></a>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/e-agenda"><span class="sidebar-mini-hide">e-Agenda</span></a>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/e-dokumen"><span class="sidebar-mini-hide">e-Dokumen</span></a>
                                </li>
                                <li>
                                    <a class="nav-main-heading" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i><span class="sidebar-mini-hide">Log Keluar</span></a>
                                </li>
                            </ul>
                        </div>
                        @else 
                        <!-- Sidebar Menu for Administrator -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li>
                                    <a href="/home"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard Admin</span></a>
                                </li>
                                <li class="nav-main-heading"><a href="#"><span class="sidebar-mini-hide">e-Aduan </span></a>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Kerosakan</span></a>
                                        <ul>
                                            <li>
                                                <a href="/admin/e-aduan">Senarai Aduan</a>
                                            </li>
                                            <li>
                                                <a href="/admin/e-aduan/laporan">Laporan</a>
                                            </li>
                                        </ul>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/admin/e-bilik"><span class="sidebar-mini-hide">e-Bilik</span></a>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/admin/e-agenda"><span class="sidebar-mini-hide">e-Agenda</span></a>
                                </li>
                                <li class="nav-main-heading">
                                    <a href="/admin/e-dokumen"><span class="sidebar-mini-hide">e-Dokumen</span></a>
                                </li>
                                <li>
                                    <a class="nav-main-heading" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i><span class="sidebar-mini-hide">Log Keluar</span></a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="/oneui/img/avatars/avatar10.jpg" alt="Avatar">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profil</li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)">
                                            <i class="si si-settings pull-right"></i>Konfigurasi
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Kawalan</li>
                                    <li>
                                        <a tabindex="-1" href="base_pages_lock.html">
                                            <i class="si si-lock pull-right"></i>Kunci Skrin
                                        </a>
                                    </li>
                                <li>
                                    <a tabindex="-1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log Keluar') }}<i class="si si-logout pull-right"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                   
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
<!-- END Header -->
<!-- END Page Header -->

<!-- Main Container -->
<main id="main-container">
    <!-- Page Header -->
    <div class="bg-image overflow-hidden" style="background-image: url('/oneui/img/photos/photo31@2x.jpg');">
        <div class="bg-black-op">
            <div class="content content-narrow">
                <div class="block block-transparent">
                    <div class="block-content block-content-full">
                        <h1 class="h1 font-w300 text-white animated fadeInDown push-50-t push-5">e-Aduan</h1>
                        <h2 class="h4 font-w300 text-white-op animated fadeInUp">Salam Sejahtera {{ Auth::User()->name }}<br>{{Auth::User()->jawatan}} - {{Auth::User()->gred}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

@yield('dashboard')
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                     <a class="font-w600" href="https://speedfinger.org" target="_blank">Speedfinger.org</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="https://automasi.jpnperak.gov.my" target="_blank">Sistem Automasi Jabatan Pendidikan Negeri Perak</a> &copy; 2019</span>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

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

        <!-- Page Plugins -->
        <script src="{{ asset('oneui/js/plugins/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('oneui/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('/oneui/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        

        <!-- Page JS Code -->
        
        <script>
            jQuery(function () {
                // Init page helpers (CountTo plugin)
                App.initHelpers('appear-countTo');
            });
        </script>
@yield('js')
    </body>
</html>