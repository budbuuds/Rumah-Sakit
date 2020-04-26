<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pebanding extends Model
{
    protected $table = 'pebanding';
    protected $fillable = 
    [
        'id','rs_2_id', 
        'r_masker_n95', 'r_masker_surgical', 'r_sarung_tangan', 'r_coverall_jumpsuit', 'r_faceshield', 'r_kacamata_goggles', 'r_boot_and_shoe_cover', 'r_handsanitizer', 'r_desinfektan', 'r_multivitamin', 'r_kantong_jenazah', 'r_Skorlet',
        'd_masker_n95', 'd_masker_surgical', 'd_sarung_tangan', 'd_coverall_jumpsuit', 'd_faceshield', 'd_kacamata_goggles', 'd_boot_and_shoe_cover', 'd_handsanitizer', 'd_desinfektan', 'd_multivitamin', 'd_kantong_jenazah', 'd_Skorlet',
        'p_masker_n95', 'p_masker_surgical', 'p_sarung_tangan', 'p_coverall_jumpsuit', 'p_faceshield', 'p_kacamata_goggles', 'p_boot_and_shoe_cover', 'p_handsanitizer', 'p_desinfektan', 'p_multivitamin', 'p_kantong_jenazah', 'p_Skorlet',
        'created_at', 'updated_at'
    ];

    public function rs_2()
    {
        return $this->belongsTo(rs_2::class);
    }
}
