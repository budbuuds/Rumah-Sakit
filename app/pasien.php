<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table='pasien';
    protected $fillable = ['id','kelompok','jumlah','created_at','updated_at'];

}
