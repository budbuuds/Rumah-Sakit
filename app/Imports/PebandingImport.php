<?php

namespace App\Imports;

use App\pebanding;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PebandingImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new pebanding([
            'rs_2_id' => $row['no'],
            'r_masker_n95' => $row['request_masker_n95'],
            'r_masker_surgical' => $row['request_masker_surgical'],
            'r_sarung_tangan' => $row['request_sarung_tangan'],
            'r_coverall_jumpsuit' => $row['request_coverall_jumpsuit'],
            'r_faceshield' => $row['request_faceshield'],
            'r_kacamata_goggles' => $row['request_kacamata_goggles'],
            'r_boot_and_shoe_cover' => $row['request_boot_and_shoe_cover'],
            'r_handsanitizer' => $row['request_handsanitizer'],
            'r_desinfektan' => $row['request_desinfektan'],
            'r_multivitamin' => $row['request_multivitamin'],
            'r_kantong_jenazah' => $row['request_kantong_jenazah'],
            'r_Skorlet' => $row['request_hepa_filter'],

            'd_masker_n95' => $row['donasi_masker_n95'],
            'd_masker_surgical' => $row['donasi_masker_surgical'],
            'd_sarung_tangan' => $row['donasi_sarung_tangan'],
            'd_coverall_jumpsuit' => $row['donasi_coverall_jumpsuit'],
            'd_faceshield' => $row['donasi_faceshield'],
            'd_kacamata_goggles' => $row['donasi_kacamata_goggles'],
            'd_boot_and_shoe_cover' => $row['donasi_boot_and_shoe_cover'],
            'd_handsanitizer' => $row['donasi_handsanitizer'],
            'd_desinfektan' => $row['donasi_desinfektan'],
            'd_multivitamin' => $row['donasi_multivitamin'],
            'd_kantong_jenazah' => $row['donasi_kantong_jenazah'],
            'd_Skorlet' => $row['donasi_hepa_filter'],

            'p_masker_n95' => $row['persen_masker_n95'],
            'p_masker_surgical' => $row['persen_masker_surgical'],
            'p_sarung_tangan' => $row['persen_sarung_tangan'],
            'p_coverall_jumpsuit' => $row['persen_coverall_jumpsuit'],
            'p_faceshield' => $row['persen_faceshield'],
            'p_kacamata_goggles' => $row['persen_kacamata_goggles'],
            'p_boot_and_shoe_cover' => $row['persen_boot_and_shoe_cover'],
            'p_handsanitizer' => $row['persen_handsanitizer'],
            'p_desinfektan' => $row['persen_desinfektan'],
            'p_multivitamin' => $row['persen_multivitamin'],
            'p_kantong_jenazah' => $row['persen_kantong_jenazah'],
            'p_Skorlet' => $row['persen_hepa_filter'],
        
        ]);
    }
}
