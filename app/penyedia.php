<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyedia extends Model
{
    protected $table='penyedia';
    protected $fillable = ['nama_penyedia','masker_n95', 'masker_surgical', 'sarung_tangan', 'coverall_jumpsuit', 'faceshield', 'kacamata_goggles', 'boot_and_shoe_cover', 'handsanitizer', 'desinfektan', 'multivitamin', 'kantong_jenazah', 'Skorlet','created_at','updated_at','alamat_penyedia','kontak'];
}
