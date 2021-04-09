<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;
    protected $primaryKey = 'idDato';
    protected $fillable =['idDato','Xi','Yeuler',
        'Yeuler_mejorado','Yrk4'];

}
