<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name', 'client_name', 'company_name', 'start_date', 'end_date', 'email'
    ];
}
