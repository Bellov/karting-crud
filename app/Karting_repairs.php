<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karting_repairs extends Model
{
    protected $table = 'karting_repairs';
    public $timestamps = true;

    protected $fillable = [
        'kartings_id',
      'repairs_description',
        'repairs_price'
    ];





}
