<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lehrer extends Model
{
    public $timestamps = false;
    protected $table = 'lehrer'; //spezifiziert Tabellenname
    protected $primaryKey = 'lehrerID';
  
}
