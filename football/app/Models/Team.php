<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
   

    
    protected $fillable = [
        'api_id',           
        'name',             
        'short_name',       
        'tla',              
        'crest_url',        
        'country',          
        'founded',          
        'venue',            
        'address',          
        'phone',            
        'email',            
    ];

    
    public function matches()
    {
        return $this->hasMany(FootballMatch::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(FootballMatch::class, 'away_team_id');
    }

    public function standings()
    {
        return $this->hasMany(Standing::class);
    }
}
