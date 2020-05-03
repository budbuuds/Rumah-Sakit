<?php

namespace App\Imports;

use App\pasien_meninggal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PasienMeninggalImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new pasien_meninggal
        (
            [
                'pasien_id' => $row['no_kategori'],
                'jumlah'    => $row['jumlah_pasien'],
                'tanggal'   => $row['tanggal_data']
            ]
        );
    }
}
