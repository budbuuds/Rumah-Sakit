<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donasinya extends Model
{
    protected $table='donasi_br';
    protected $fillable = ['tanggal','barangnya','file_bukti','donaturnya','rs_id','created_at','updated_at'];

    public function rs()
    {
        return $this->belongsTo(rs::class);
    }
}