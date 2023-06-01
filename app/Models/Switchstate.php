<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Switchstate extends Model
{
    public $timestamps = false;
    protected $table = 'view_status'; //spezifiziert Tabellenname
    protected $primaryKey = 'id';
  
}
