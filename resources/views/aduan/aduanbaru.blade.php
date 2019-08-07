@extends('master.app')

@section('dashboard')
<div class="row">
    <div class="col-md-12">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                    </li>
                </ul>
                <h3 class="block-title">Daftar Aduan Kerosakan Peralatan/Perisian ICT</h3>
            </div>
            <div class="block-content">
                <form class="form-horizontal push-10-t push-10" action="/e-aduan/simpan" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="mega-firstname">Nama Pegawai</label>
                                    <input class="form-control input-lg" type="text" id="nama" name="nama" placeholder="Isikan nama anda.." value="{{Auth::User()->name }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mega-lastname">No Sambungan</label>
                                    <input class="form-control input-lg" type="text" id="ext" name="ext" placeholder="Isikan No Sambungan Telefon..">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="mega-bio">Keterangan/Perihal Kerosakan</label>
                                    <textarea class="form-control input-lg" id="keterangan" name="keterangan" rows="13" placeholder="Sila isikan deskripsi masalah yang dihadapi dengan jelas.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="mega-city">No Daftar Harta Modal/No. Siri Peralatan</label>
                                    <input class="form-control input-lg" type="text" id="nodhm" name="nodhm" placeholder="Isikan No Daftar Harta Modal">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="mega-skills">Kategori Peralatan/Perisian</label>
                                    <select class="form-control" id="kategorialat" name="kategorialat" size="7" multiple>
                                        @foreach($kategori as $category)
                                        <option value="{{ $category->idkategorialat }}">{{ $category->peralatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Hantar Laporan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Mega Form -->
    </div>
</div> 
</main>

@endsection