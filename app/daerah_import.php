<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daerah_import extends Model
{
    protected $table = 'daerah';
    protected $fillable =
    [
        'id','daerah_id',
        'r_masker_n95', 'r_masker_surgical', 'r_sarung_tangan', 'r_coverall_jumpsuit', 'r_faceshield', 'r_kacamata_goggles', 'r_boot_and_shoe_cover', 'r_handsanitizer', 'r_desinfektan', 'r_multivitamin', 'r_kantong_jenazah', 'r_Skorlet',
        'd_masker_n95', 'd_masker_surgical', 'd_sarung_tangan', 'd_coverall_jumpsuit', 'd_faceshield', 'd_kacamata_goggles', 'd_boot_and_shoe_cover', 'd_handsanitizer', 'd_desinfektan', 'd_multivitamin', 'd_kantong_jenazah', 'd_Skorlet',
        'created_at', 'updated_at'
    ];

    public function daerah()
    {
        return $this->belongsTo(daerah::class);
    }
}
