<?php

namespace App\Imports;

use App\Models\Sinif;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SinifImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sinif([
            'sinav_ili' => $row['Şehir'],
            'universite' => $row['Üniversite'],
            'fakulte' => $row['Fakülte'],
            'sinif' => $row['Sınıf'],
            'kapasite' => $row['Kapasite']
        ]);
    }
}
