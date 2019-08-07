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
                    					@if($aduan->fk_idstatusaduan == '1')
                                            <span class="label label-success">Open</span>
                                            @elseif($aduan->fk_idstatusaduan == '3')
                                                <span class="label label-warning">KIV</span>
                                        @else 
                                            <span class="label label-danger">Close</span>
                                        @endif</h3>
                				</div>
                			<div class="block-content">
                                <form method="post" action="/e-aduan/admin/butiran">
                                    @csrf
                            		<table class="table">
                                		<tbody>
                                    		<tr>
        	                                    <td>Keterangan/Perihal Aduan</td>
        	                                    <td>:</td>
        	                                    <td><div class="col-xs-10">{{$aduan->keterangan}}</div></td>
                                    		</tr>
                                    		<tr>
                                    			<td>Butiran Penyelesaian</td>
                                    			<td>:</td>
                                    			<td><div class="col-xs-12"><textarea class="form-control input-lg" id="butiran" name="butiran" rows="3" placeholder="Sila isikan butiran penyelesaian kerja..">{{$aduan->butiran}}</textarea>
                                                    <input type="hidden" name="idaduan" id="idaduan" value="{{$aduan->idaduan}}"></div></td>
                                    		</tr>
                                    		<tr>
                                    			<td>Tarikh Selesai</td>
                                    			<td>:</td>
                                    			<td>
                                                    <div class="col-xs-4" id="sandbox-container">
                                                        <div class="input-group date">
                                                            @php 
                                                            $tarikhbutiran = substr($aduan->butiran_created_at, 8,2)."/".substr($aduan->butiran_created_at, 5,2)."/".substr($aduan->butiran_created_at, 0,4)
                                                            @endphp
                                                            <input class="form-control" type="text" name="tarikhselesai" id="
                                                            tarikhselesai" value="{{$tarikhbutiran}}">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                        </div>
                                                    </div>
                                                </td>
                                    		</tr>
                                            <tr>
                                                <td>Status Aduan</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="col-xs-4">
                                                        <select class="form-control" name="statusaduan" id="statusaduan">
                                                            <option value="#">-Sila Pilih Status-</option>
                                                            @foreach($status as $stat)
                                                                <option value="{{$stat->idstatusaduan}}"
                                                                    @if($aduan->fk_idstatusaduan == $stat->idstatusaduan)
                                                                    selected
                                                                    @endif>{{$stat->namastatus}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                            <tr>
                                            <tr>
                                                <td>Tarikh Disahkan Selesai</td>
                                                <td>:</td>
                                                <td><div class="col-xs-12">@if($aduan->sah_created_at == "") <i>Aduan ini belum disahkan selesai oleh pengadu.</i> 
                                                    @else {{ date('d/m/Y H:i:a', strtotime($aduan->sah_created_at)) }}@endif</div></td>
                                            </tr>
                                                <td colspan="3" class="text-left">
                                                    <br>
                                                    <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Simpan</button>
                                                </td>
                                            </tr>
                                		</tbody>
                            		</table>
                                </form>
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