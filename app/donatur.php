<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donatur extends Model
{
    protected $table='donatur';
    protected $fillable = ['rs_id','nama_donatur','tunai','masker_n95', 'masker_surgical', 'sarung_tangan', 'coverall_jumpsuit', 'faceshield', 'kacamata_goggles', 'boot_and_shoe_cover', 'handsanitizer', 'desinfektan', 'multivitamin', 'kantong_jenazah', 'Skorlet','created_at','updated_at'];

    public function rs()
    {
        return $this->belongsTo(rs::class);
    }

}
