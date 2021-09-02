<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicequote extends Model
{
    protected $fillable =[
        'id','service_name','price',
    ];
}
