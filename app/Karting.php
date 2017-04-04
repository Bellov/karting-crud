<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karting extends Model
{
    public $timestamps = true;

    protected $fillable = [

        'name'
    ];


    public function karting_informations()
    {
    	return $this->hasMany('App\Karting_information');
    }

    public function karting_repairs()
    {
    	return $this->hasMany('App\Karting_repair');
    }
}
