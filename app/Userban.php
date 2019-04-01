<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userban extends Model
{
     protected $table = 'Userban';
     protected $fillable = [
        'firstname',
        'lastname',
        
    ];
}
