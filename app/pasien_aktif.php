<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien_aktif extends Model
{
    protected $table='pasien_aktif';
    protected $fillable = 
    [
        'pasien_id','jumlah','tanggal','created_at','updated_at'
    ];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }
}
