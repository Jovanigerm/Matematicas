<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datosentrada extends Model
{
    use HasFactory;
    protected $primaryKey = 'idEntrada';
    protected $fillable =['idEntrada','ValorH','Interacciones'];

}
