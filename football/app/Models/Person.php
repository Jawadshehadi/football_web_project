<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';


    protected $fillable = [
        'api_id',      
        'first_name',
        'last_name',
        'date_of_birth',
        'nationality',
        'position',       
        
    ];

    
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function matches()
    {
        return $this->belongsToMany(FootballMatch::class);
    }
}
