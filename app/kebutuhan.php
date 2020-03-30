<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    protected $table='kebutuhan';
    protected $fillable = ['rs_id', 'masker_n95', 'masker_surgical', 'sarung_tangan', 'coverall_jumpsuit', 'faceshield', 'kacamata_goggles', 'boot_and_shoe_cover', 'handsanitizer', 'desinfektan', 'multivitamin', 'kantong_jenazah', 'Skorlet', 'updated_at'];

    public function rs()
    {
        return $this->belongsTo(rs::class);
    }
}
