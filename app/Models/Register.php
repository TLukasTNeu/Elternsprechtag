<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $timestamps = false;
    protected $table = 'registrierung'; //spezifiziert Tabellenname
    protected $primaryKey = 'rNr';
   
}
