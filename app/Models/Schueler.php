<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schueler extends Model
{
    protected $table = 'schueler'; //spezifiziert Tabellenname
    protected $primaryKey = 'schuelerID';
  
}
