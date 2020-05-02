<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien_positif extends Model
{
    protected $table='pasien_positif';
    protected $fillable = 
    [
        'pasien_id','jumlah','tanggal','created_at','updated_at'
    ];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }
}
