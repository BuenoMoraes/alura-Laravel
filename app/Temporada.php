<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;
    /*Definir que uma temporada tem varios episódios*/ 
    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

     /*Definir que uma temporada tem apenas uma série*/ 
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
