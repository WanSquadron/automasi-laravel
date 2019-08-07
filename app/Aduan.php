<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $table = 'tbl_aduan';

    public function User()
    {
        return $this->belongsTo('App\User', 'fk_idtmspengadu', 'idtms');
    }

    public function NamaKategoriAlat(){
        return $this->hasOne('App\GlobalKategoriPeralatan', 'idkategorialat', 'fk_idkategorialat');
    }

    public function getNamaKategoriAttribute(){

    	$namakategori = GlobalKategoriPeralatan::where('idkategorialat', $this->fk_idkategorialat)->first();
    	return $namakategori->peralatan;
    }

    public function getNamaPengaduAttribute() {
    	$pengadu = User::where('idtms', '=', $this->fk_idtmspengadu)->first();
    	return $pengadu['name'];
    }

    public function getNamaSektorAttribute(){
        $namasektor = GlobalSektor::where('idsektor', $this->fk_idsektor)->first();
        return $namasektor['namasektor'];
    }

    public function getNamaUnitAttribute(){
        $namaunit = GlobalUnit::where('idunit', $this->fk_idunit)->first();
        return $namaunit['namaunit'];
    }

    public function getTarikhLaporAttribute(){

    	return $this->created_at->format('d/m/Y h:i:a');
    }

}
