<?php

namespace App\Imports;

use App\pasien_aktif;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PasienAktifImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pasien_aktif([
            'pasien_id' => $row['no_kategori'],
            'jumlah'    => $row['jumlah_pasien'],
            'tanggal'   => $row['tanggal_data']
        ]);
    }
}
