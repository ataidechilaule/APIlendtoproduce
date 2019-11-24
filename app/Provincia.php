<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = "provincias";

    protected $fillable= [
        'prov_nome',
    ];

    public function distritos(){
        return $this->hasMany('App\Distrito');
    }
}
