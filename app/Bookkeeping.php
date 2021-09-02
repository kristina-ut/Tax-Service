<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookkeeping extends Model
{
    protected $table = 'bookkeepings';
    protected $fillable = [

        'file_name','file_path'

    ];
}
