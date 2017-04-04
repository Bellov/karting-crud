<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karting_information extends Model
{
    protected $table = 'kartings_information';
    public $timestamps = false;
    protected $fillable = [

      'karting_number',
        'price',
        'km',
        'karting_hours'
    ];

    public function karting_repairs()
    {

        return $this->hasMany('App\Karting_repairs');
    }
}
