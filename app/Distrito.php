<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = "distritos";

    protected $fillable= [
        'dis_nome',
        'provincia_id',
    ];

    public function terras(){
        return $this->hasMany('App\Terra');
    }


    public function provincia(){
        return $this->belongsTo('App\Provincia');
    }
}
