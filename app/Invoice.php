<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable =[
        'name', 'email', 'status', 'resulttime', 'payamount', 'paidtime'    ];
}
