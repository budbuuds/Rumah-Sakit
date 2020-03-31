<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    protected $table='kebutuhan';
    protected $fillable = ['rs_id', 'masker_n95', 'masker_surgical', 'sarung_tangan', 'coverall_jumpsuit', 'faceshield', 'kacamata_goggles', 'boot_and_shoe_cover', 'handsanitizer', 'desinfektan', 'multivitamin', 'kantong_jenazah', 'Skorlet',
                                    'status_masker_n95','status_masker_surgical','status_sarung_tangan','status_coverall_jumpsuit','status_faceshield','status_kacamata_goggles','status_boot_and_shoe_cover','status_handsanitizer',
                                    'status_desinfektan','status_multivitamin','status_kantong_jenazah','status_Skorlet', 'updated_at','created_at'];

    public function rs()
    {
        return $this->belongsTo(rs::class);
    }
}
