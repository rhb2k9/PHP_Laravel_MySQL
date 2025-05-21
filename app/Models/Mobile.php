<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    //
    protected $table ='mobiles';

    protected $fillable =[
        'Brand',
        'Model',
        'Ram',
        'Storage',
        'Rate'
    ];

    public $timestamps=false;
}
