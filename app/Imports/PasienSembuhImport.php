<?php

namespace App\Imports;

use App\pasien_sembuh;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PasienSembuhImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new pasien_sembuh
        (
            [
                'pasien_id' => $row['no_kategori'],
                'jumlah'    => $row['jumlah_pasien'],
                'tanggal'   => $row['tanggal_data']
            ]
        );
    }
}
