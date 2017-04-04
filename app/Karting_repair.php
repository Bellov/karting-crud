<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karting_repair extends Model
{
    protected $table = 'karting_repairs';

    public $timestamps = true;

    protected $fillable = [

    	'karting_id',
    	'repair_description',
    	'repair_price',
        'created_at'
    ];


    public  function karting()
    {
    	return $this->belongsTo('App\Karting');
    }
}
