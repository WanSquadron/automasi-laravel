<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Aduan;
use App\Tickets;
use App\Staff;
use App\GlobalKategoriPeralatan;
use App\GlobalStatusAduan;

## Status Aduan | 1 - Open | 2 - Close | 3 - KIV

class AdminController extends Controller
{
    public function SenaraiAduan(Request $request){

    	$senarai = Aduan::orderBy('created_at', 'DESC')->get();
    	$jumlahaduan = Aduan::count();
    	$todayaduan = Aduan::where('tarikh_aduan','=', date('Y-m-d'))->count();
    	$closeaduan = Aduan::where('fk_idstatusaduan','2')->count();
    	$openaduan = Aduan::where('fk_idstatusaduan','1')->orwhere('fk_idstatusaduan','3')->count();

		return view('aduan.admin.senaraiaduan', [ 
											'senarai' => $senarai, 
											'jumlahaduan' => $jumlahaduan,
											'todayaduan' => $todayaduan,
											'closeaduan' => $closeaduan,
											'openaduan' => $openaduan,
											'stat' => $request->stat
										  ]);
    }

    public function ViewAduan(Request $request, $idaduan){

    	$id = htmlentities($idaduan, ENT_QUOTES);

    	$senarai = Aduan::orderBy('created_at', 'DESC')->get();
    	$jumlahaduan = Aduan::count();
    	$todayaduan = Aduan::where('tarikh_aduan','=', date('Y-m-d'))->count();
    	$closeaduan = Aduan::where('fk_idstatusaduan','2')->count();
    	$openaduan = Aduan::where('fk_idstatusaduan','1')->orwhere('fk_idstatusaduan','3')->count();
        $status = GlobalStatusAduan::all();
    	
    	return view('aduan.admin.viewaduan', [
    									'aduan' => $aduan = Aduan::where('idaduan', $id)->first(), 
										'jumlahaduan' => $jumlahaduan,
										'todayaduan' => $todayaduan,
										'closeaduan' => $closeaduan,
										'openaduan' => $openaduan,
                                        'status' => $status,
										'stat' => $request->stat
										]);


    }

    public function SaveButiran(Request $request){

        $idaduan = htmlentities($request->input('idaduan'), ENT_QUOTES);
        $butiran = htmlentities($request->input('butiran'), ENT_QUOTES);
        $tarikhselesai = htmlentities($request->input('tarikhselesai'), ENT_QUOTES);
        $statusaduan = htmlentities($request->input('statusaduan'), ENT_QUOTES);

        $tarikh = substr($tarikhselesai, 6,4).substr($tarikhselesai, 3,2).substr($tarikhselesai, 0,2);

        $simpan = Aduan::where('idaduan', $idaduan)->first();
        $simpan->fk_idstatusaduan = $statusaduan;
        $simpan->butiran = $butiran;
        $simpan->butiran_created_at = $tarikh;
        $simpan->save();

        return redirect('admin/e-aduan/view/?stat=success');
    }
}
