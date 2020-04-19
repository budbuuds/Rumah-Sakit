<?php

namespace App\Imports;

use App\donatur;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DonaturImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new donatur([
            'rs_id' => $row['fasilitas_kesehatan'],
            'nama_donatur' => $row['nama_donatur'],
            'tunai' => $row['tunai'],
            'masker_n95' => $row['masker_n95'],
            'masker_surgical' => $row['masker_surgical'],
            'sarung_tangan' => $row['sarung_tangan'],
            'coverall_jumpsuit' => $row['coverall_jumpsuit'],
            'faceshield' => $row['faceshield'],
            'kacamata_goggles' => $row['kacamata_goggles'],
            'boot_and_shoe_cover' => $row['boot_and_shoe_cover'],
            'handsanitizer' => $row['handsanitizer'],
            'desinfektan' => $row['desinfektan'],
            'multivitamin' => $row['multivitamin'],
            'kantong_jenazah' => $row['kantong_jenazah'],
            'Skorlet' => $row['skorlet'],
        ]);
    }
}
