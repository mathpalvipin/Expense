<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense extends Model
{     protected $fillable = [
        'user_id','name','rs'
    ];
    //
}
