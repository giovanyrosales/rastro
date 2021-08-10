<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table = 'ventas';
    protected $fillable = [
        'correla','nombreV', 'domiV','depaV', 'sumaV', 'nombreC', 'domiC', 'depaC', 'elo', 'semo', 'expre','conti','semo2','herrado','vent','fierro','numF','depaF','alcal','dia','mes','ano','estado'
    ];
}
