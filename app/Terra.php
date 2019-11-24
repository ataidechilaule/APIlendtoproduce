<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terra extends Model
{
    protected $table = "terras";

    protected $fillable= [
        'ter_dimensao',
        'ter_duat',
        'ter_rio',
        'ter_culturas',
        'ter_motivo',
        'user_id',
        'distrito_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function distrito(){
        return $this->belongsTo('App\Distrito');
    }
}
