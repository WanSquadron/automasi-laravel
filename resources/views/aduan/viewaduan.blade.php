@extends('master.app')

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
    				<h3 class="block-title">@php $idaduan = sprintf('%08d', $aduan->idaduan); @endphp #{{$idaduan}}<br><small>{{$aduan->TarikhLapor}}</small><br><br>
    					@if($aduan->statustutup == 'N')
                            <span class="label label-success">Open</span>
                            @elseif($aduan->statustutup == 'KIV')
                                <span class="label label-warning">KIV</span>
                        @else 
                            <span class="label label-danger">Close</span>
                        @endif</h3>
				</div>
			    <div class="block-content">
            		<table class="table">
                		<tbody>
                    		<tr>
                                <td class="text-left">Keterangan/Perihal Aduan</td>
                                <td class="text-center">:</td>
                                <td>{{$aduan->keterangan}}</td>
                    		</tr>
                    		<tr>
                    			<td>Butiran Penyelesaian</td>
                    			<td>:</td>
                    			<td>@if($aduan->butiran == "") <i>Tiada butiran pembaikan dicatatkan</i> @else {{$aduan->butiran}} @endif </td>
                    		</tr>
                    		<tr>
                    			<td>Tarikh Selesai</td>
                    			<td>:</td>
                    			<td>@if($aduan->butiran_created_at == "") <i>Tiada tarikh pembaikan dicatatkan</i> @else {{$aduan->butiran_created_at}} @endif</td>
                    		</tr>
                    		<tr>
                    			<td>Tarikh Disahkan Selesai</td>
                    			<td>:</td>
                    			<td>@if($aduan->sah_created_at == "") <i>Sila sahkan penyelesaian kerja aduan ini.</i> <br><form action="/e-aduan/view/sah" method="post"> @csrf <input type="hidden" name="idaduan" id="idaduan" value="{{$aduan->idaduan}}"><button class="btn btn-s btn-square btn-warning push-5-r push-10" type="submit"><i class="fa fa-check">&nbsp;</i> Klik Disini! Jika aduan ini telah diselesaikan</button></form></a> 
                    				@else {{ date('d/m/Y H:i:a', strtotime($aduan->sah_created_at)) }}@endif</td>
                    		</tr>
                    		<tr>
                    			<td>Pegawai Bertugas</td>
                    			<td>:</td>
                    			<td>@if($aduan->idtmsft == "NULL") <i>Aduan ini akan diselesaikan sebentar lagi, harap bersabar. Terima kasih! @else {{$aduan->idtmsft}} @endif
                    		</tr>
                		</tbody>
            		</table>
			    </div>
		    </div>
		</div>
	</div>
</div>
</main>
<!-- END Page Content -->
@endsection

@section('js')

<script type="text/javascript">

@if ($stat == 'success')    

    Sweetalert2({
                type: 'success',
                title: 'Berjaya!',
                html: 'Aduan ini telah disahkan selesai..<br><br> Terima kasih!'
        });
@endif
</script>

@endsection