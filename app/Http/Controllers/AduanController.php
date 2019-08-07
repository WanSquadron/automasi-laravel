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
use App\TelegramBot;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AduanController extends Controller
{	

	public function AlertMessage($logo=null, $type=null, $title=null, $msg=null, $link=null){
		return view('success-page');
	}

    public function FormAduan(){
    	return view('aduan.aduanbaru', ['kategori' => $kategori = GlobalKategoriPeralatan::all()]);
    }

    public function SaveAduan(Request $request){
    	$ext  = htmlentities($request->input('ext'),ENT_QUOTES);
    	$keterangan = htmlentities($request->input('keterangan'),ENT_QUOTES);
    	$nodhm = htmlentities($request->input('nodhm'),ENT_QUOTES);
    	$kategorialat = htmlentities($request->input('kategorialat'),ENT_QUOTES);

    	$notickets = Tickets::first();

    	$aduan = new Aduan;
    	$aduan->idaduan = $notickets->ticketnum;
    	$aduan->idtmsft = "NULL";
    	$aduan->fk_idtmspengadu = Auth::User()->idtms;
        $aduan->fk_idsektor = Auth::User()->fk_idsektor;
    	$aduan->fk_idunit = Auth::User()->fk_idunit;
    	$aduan->fk_idkategorialat = $kategorialat;
    	$aduan->ext = $ext;
    	$aduan->nodhm = $nodhm;
        $aduan->tarikh_aduan = date('Y-m-d');
    	$aduan->keterangan = $keterangan;
    	$aduan->save();

        $tarikhaduan = Aduan::where('idaduan', $notickets->ticketnum)->first();
        $tarikh = date('d/m/Y', strtotime($tarikhaduan->created_at));
        $masa = date('h:i:a', strtotime($tarikhaduan->created_at));

    	Tickets::increment('ticketnum');

        $bot_token = "769423440:AAHdWT6cIWTKFgu7ZAn_gzC_5eINAxeHsDc";
        
        $txtwan = "<b>Sistem Automasi JPNPerak</b> \nHai Syazwan Shahferi, anda ada satu laporan kerosakkan baru. \nNama Pengadu :". Auth::User()->name."  \nSektor/Unit : ".Auth::User()->NamaUnit."  \nKeterangan Masalah : $keterangan \nTarikh : ".$tarikh."\nMasa : ".$masa;
        
        $bot = new TelegramBot($bot_token);
        $bot->sendApiMsg(30461455, $txtwan, false, 'html', false);
        //$bot->sendApiMsg(602211047, $txtandika, false, 'html', false);
        //$bot->sendApiMsg(3232738, $txtsiti, false, 'html', false);

    	$logo = 'success';
    	$type = 'html';
    	$title = 'Berjaya!';
    	$msg = 'Juruteknik kami akan ke lokasi anda sebentar lagi.<br><br>Terima kasih!';
    	$link = '/home';
		
		//$this->AlertMessage($logo,$type,$title,$msg,$link);
								
		return redirect('/e-aduan/?stat=success');
    }

    public function SenaraiAduan(Request $request){

    	$senarai = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->orderBy('created_at', 'DESC')->get();
    	$jumlahaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->count();
    	$todayaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->where('tarikh_aduan','=', date('Y-m-d'))->count();
    	$closeaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->where('fk_idstatusaduan','2')->count();
    	$openaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)
    					  ->where(function ($query) {
    							$query->where('fk_idstatusaduan','1')
    							      ->orwhere('fk_idstatusaduan','3');
    				})->count();


		return view('aduan.senaraiaduan', [ 
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

    	$jumlahaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->count();
    	$todayaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->where('tarikh_aduan','=', date('Y-m-d'))->count();
    	$closeaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->where('fk_idstatusaduan','2')->count();
    	$openaduan = Aduan::where('fk_idtmspengadu', Auth::User()->idtms)->where('fk_idstatusaduan','1')->orwhere('fk_idstatusaduan','3')->count();
    	
    	return view('aduan.viewaduan', [
    									'aduan' => $aduan = Aduan::where('idaduan', $id)->where('fk_idtmspengadu', Auth::User()->idtms)->first(), 
										'jumlahaduan' => $jumlahaduan,
										'todayaduan' => $todayaduan,
										'closeaduan' => $closeaduan,
										'openaduan' => $openaduan,
										'stat' => $request->stat
										]);


    }

    public function SahAduanSelesai(Request $request){

    	$id = htmlentities($request->input('idaduan'), ENT_QUOTES);

    	$aduan = Aduan::where('idaduan', $id)->first();
    	$aduan->sah_created_at = now();
    	$aduan->save();

    	return redirect('/e-aduan/view/'.$id.'/?stat=success');
    }

    public function cantum(){

    	$staff = Staff::limit(91,200)->get();

    	foreach($staff as $staf){

    		$userr = new User;
    		$userr->idtms = $staf->cid;
    		$userr->fk_idsektor = $staf->idsektor;
    		$userr->fk_idunit = $staf->idunit;
    		$userr->name = $staf->cname;
    		$userr->mykad = $staf->cnokp;
    		$userr->email = $staf->cid.'@moe.edu.my';
    		$userr->password = Hash::make($staf->cid);
    		$userr->gred = $staf->gred;
    		$userr->jawatan = $staf->jawatan;
    		$userr->hasRole = "user";
    		$userr->save();

    	}
    }
    
}
