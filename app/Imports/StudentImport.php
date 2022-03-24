<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'candidateNo' => $row['Aday No'],
            'identityNo' => $row['Kimlik No'],
            'name' => $row['Adı'],
            'surname' => $row['Soyadı'],
            'fatherName' => $row['Baba Adı'],
            'birthplace' => $row['Doğum Yeri'],
            'dateOfBirth' => $row['Doğum Tarihi'],
            'nationality' => $row['Uyruk'],
            'examCity' => $row['Sınav İli'],
            'examPlace' => $row['Sınav Yeri'],
            'class' => $row['Sınıf'],
            'order' => $row['Sıra']
        ]);
    }
}
