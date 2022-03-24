<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "student";

    protected $fillable = [
        'candidateNo',
        'identityNo',
        'name',
        'surname',
        'fatherName',
        'birthplace',
        'dateOfBirth',
        'nationality',
        'examCity',
        'examPlace',
        'class',
        'order'
    ];

}
