<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Aduan;
use App\Tickets;
Use App\GlobalKategoriPeralatan;
use App\Staff;


class AdminController extends Controller
{
    public function SenaraiAduan(Request $request){

    	$senarai = Aduan::orderBy('created_at', 'DESC')->get();
    	$jumlahaduan = Aduan::count();
    	$todayaduan = Aduan::where('tarikh_aduan','=', date('Y-m-d'))->count();
    	$closeaduan = Aduan::where('statustutup','Y')->count();
    	$openaduan = Aduan::where('statustutup','N')->orwhere('statustutup','KIV')->count();

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
    	$closeaduan = Aduan::where('statustutup','Y')->count();
    	$openaduan = Aduan::where('statustutup','N')->orwhere('statustutup','KIV')->count();
    	
    	return view('aduan.viewaduan', [
    									'aduan' => $aduan = Aduan::where('idaduan', $id)->first(), 
										'jumlahaduan' => $jumlahaduan,
										'todayaduan' => $todayaduan,
										'closeaduan' => $closeaduan,
										'openaduan' => $openaduan,
										'stat' => $request->stat
										]);


    }
}
