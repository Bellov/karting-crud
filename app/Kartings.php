<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kartings extends Model
{
    public $timestamps = true;

    protected $fillable = [

        'name'
    ];


    public function karting_information()
    {

        return $this->hasMany('App\Karting_information','');
    }


    public function karting_repairs()
    {
        return $this->hasMany('App\Karting_repairs');
    }

    /*
       kart : name  = xr7
    [
    mode kart number =  a (karting info)
        reparis1 (karting repir)
         repari2(karting repir)

    model b (karting info)
        reparis1(karting repir)
       repari2(karting repir)

    ]
    */




}