<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
     'email', 
     'password',
     'favourite_teams'
    ];
    protected $hidden = [
        'password',
    ];
}
