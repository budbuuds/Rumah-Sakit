<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyedia extends Model
{
    protected $table='penyedia';
    protected $fillable = ['nama_penyedia','created_at','updated_at','alamat_penyedia','kontak','barang','harga','satuan','status'];
}
