@extends('master.app')

@section('dashboard')
<!-- Dashboard Cards -->
<br>
<div class="row">
    <div class="col-lg-4">
        <!-- Add Friend -->
        <div class="bg-image" style="background-image: url('oneui/img/photos/photo29.jpg');">
            <div class="bg-black-op">
                <div class="block block-themed block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-center">Aduan Kerosakkan ICT</h3>
                    </div>
                    <div class="block-content text-center">
                        <div class="push">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="oneui/img/avatars/avatar10.jpg" alt="">
                        </div>
                        <h3 class="font-w300 text-white">Teknikal</h3>
                    </div>
                    <div class="block-content block-content-full text-center">
                        @if(Auth::User()->hasRole == "user")
                        <a class="btn btn-sm btn-default" href="/e-aduan">
                        @else
                        <a class="btn btn-sm btn-default" href="/admin/e-aduan">
                        @endif
                            <i class="fa fa-fw fa-plus text-success"></i> Klik Disini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <!-- Category -->
        <div class="bg-image" style="background-image: url('oneui/img/photos/photo28.jpg');">
            <div class="bg-black-op">
                <div class="block block-themed block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-center">Tempahan Bilik Mesyuarat</h3>
                    </div>
                    <div class="block-content text-center">
                        <div class="push">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="oneui/img/avatars/avatar10.jpg" alt="">
                        </div>
                        <h3 class="font-w300 text-white">Pentadbiran</h3>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <a class="btn btn-sm btn-default" href="/e-bilik">
                            <i class="fa fa-fw fa-plus text-success"></i> Klik Disini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <!-- Weather -->
        <div class="block">
            <div class="bg-image" style="background-image: url('oneui/img/photos/photo33.jpg');">
                <div class="bg-black-op">
                <div class="block block-themed block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-center">e-Agenda</h3>
                    </div>
                    <div class="block-content text-center">
                        <div class="push">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="oneui/img/avatars/avatar10.jpg" alt="">
                        </div>
                        <h3 class="font-w300 text-white">Pengurusan</h3>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <a class="btn btn-sm btn-default" href="/e-agenda">
                            <i class="fa fa-fw fa-plus text-success"></i> Klik Disini
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <!-- Add Friend -->
        <div class="bg-image" style="background-image: url('oneui/img/photos/photo29.jpg');">
            <div class="bg-black-op">
                <div class="block block-themed block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-center">eDokumen</h3>
                    </div>
                    <div class="block-content text-center">
                        <div class="push">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="oneui/img/avatars/avatar10.jpg" alt="">
                        </div>
                        <h3 class="font-w300 text-white">Storan</h3>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <a class="btn btn-sm btn-default" href="/e-dokumen">
                            <i class="fa fa-fw fa-plus text-success"></i> Klik Disini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <!-- Category -->
        <div class="bg-image" style="background-image: url('oneui/img/photos/photo28.jpg');">
            <div class="bg-black-op">
                <div class="block block-themed block-transparent">
                    <div class="block-header">
                        <h3 class="block-title text-center">eTugasan</h3>
                    </div>
                    <div class="block-content text-center">
                        <div class="push">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="oneui/img/avatars/avatar10.jpg" alt="">
                        </div>
                        <h3 class="font-w300 text-white">Peribadi</h3>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <a class="btn btn-sm btn-default" href="/e-tugasan">
                            <i class="fa fa-fw fa-plus text-success"></i> Klik Disini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Dashboard Cards -->
@endsection

@section('js')

<script src="{{ asset('oneui/js/pages/base_pages_dashboard_v2.js') }}"></script>

<script type="text/javascript">

@if ($stat == 'success')    

    Sweetalert2({
                type: 'success',
                title: 'Berjaya!',
                html: 'Aduan berjaya direkodkan!<br>Juruteknik kami akan ke lokasi anda sebentar lagi..<br><br> Terima kasih!'
        });
@endif
</script>
@endsection
