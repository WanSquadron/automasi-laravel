@extends('master.app')
@section('js')


<script type="text/javascript">

@if ($stat == 'success')    

    Sweetalert2({
                type: 'success',
                title: 'Berjaya!',
                html: 'Butiran penyelesaian telah direkodkan<br><br> Terima kasih!'
        });
@endif
</script>
@endsection

@section('dashboard')

<!-- Page Content -->
<div class="content content-narrow">
    <!-- Stats -->
    <div class="row text-uppercase">
        <div class="col-xs-6 col-sm-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="text-muted">
                        <small><i class="si si-calendar"></i> Aduan</small>
                    </div>
                    <div class="font-s12 font-w700">Hari ini</div>
                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="{{$todayaduan}}"></a>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="text-muted">
                        <small><i class="si si-calendar"></i> Aduan</small>
                    </div>
                    <div class="font-s12 font-w700">Dalam Proses</div>
                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="{{$openaduan}}"></a>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="text-muted">
                        <small><i class="si si-calendar"></i> Aduan</small>
                    </div>
                    <div class="font-s12 font-w700">Selesai</div>
                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="{{$closeaduan}}"></a>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="text-muted">
                        <small><i class="si si-calendar"></i> Jumlah</small>
                    </div>
                    <div class="font-s12 font-w700">Aduan Dibuat</div>
                    <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="{{$jumlahaduan}}"></a>
                </div>
            </div>
        </div>
    </div>
<!-- END Stats -->

    <div class="content">
        <div class="row">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Senarai Aduan</h3>
                </div>
                <div class="block-content">
                    <table class="table table-bordered table-hover table-striped js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <td class="text-left">No. Tiket</td>
                                <td class="text-left">Nama Pengadu/Unit</td>
                                <td>Perihal Aduan</td>
                                <td>Tarikh</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($senarai as $report)
                            @php $idaduan = sprintf('%08d', $report->idaduan); @endphp
                            <tr>
                                <td class="font-w600 text-left" style="width: 5%;"><a class="font-w600" href="/e-aduan/admin/view/{{$report->idaduan}}">#{{ $idaduan }}</a><br>
                                    @if($report->fk_idstatusaduan == '1')
                                        <span class="label label-success">Open</span>
                                        @elseif($report->fk_idstatusaduan == '3')
                                            <span class="label label-warning">KIV</span>
                                    @else 
                                        <span class="label label-danger">Close</span>
                                    @endif</td>
                                <td class="text-left" style="width: 150px;">
                                    Nama : {{ucwords(strtolower($report->NamaPengadu))}}<br>
                                    Sektor : {{$report->NamaSektor}} <br>
                                    Unit : {{$report->NamaUnit}}
                                </td>
                                <td style="width: 150px;">
                                    Kategori : {{ $report->NamaKategori }}<br>{{ $report->keterangan }}
                                </td>
                                
                                <td class="text-left" style="width: 5%;">
                                    {{ $report->TarikhLapor }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END Page Content -->

@endsection

