<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rs extends Model
{
    protected $table = 'rs';
    protected $fillable = ['id','nama_rs', 'alamat', 'masker_n95', 'masker_surgical', 'sarung_tangan', 'coverall_jumpsuit', 'faceshield', 'kacamata_goggles', 'boot_and_shoe_cover', 'handsanitizer', 'desinfektan', 'multivitamin', 'kantong_jenazah', 'Skorlet','created_at', 'updated_at'];
 
    public function kebutuhan()
    {
        return $this->hasMany(kebutuhan::class);
    }

    public function donatur()
    {
        return $this->hasMany(donatur::class);
    }
}
