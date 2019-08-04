<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalKategoriPeralatan extends Model
{
    protected $table = 'glo_kategorialat';

    public function Kategori(){
    	return $this->belongsTo('App\Aduan', 'fk_idkategorialat', 'idkategorialat');
    }

}
