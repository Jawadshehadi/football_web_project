<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scorer extends Model
{
    use HasFactory;
    protected $table = 'scorers';

  
    protected $fillable = [
        'api_id',         
        'match_id',      
        'person_id',     
        'team_id',        
        'minute',         
        'type',           
    ];

  
    public function match()
    {
        return $this->belongsTo(FootballMatch::class, 'match_id');
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
