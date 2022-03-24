<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinif extends Model
{
    use HasFactory;

    protected $table = "class";

    protected $fillable = [
        'sinav_ili',
        'universite',
        'fakulte',
        'sinif',
        'kapasite'
    ];
}
