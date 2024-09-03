<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;
   
    
     
      protected $fillable = [
          'api_id',
          'competition_id', 
          'season',        
          'home_team',    
          'away_team',     
          'score',         
          'status',        
          'utc_date',       
         
      ];
  
    
      public function competition()
      {
          return $this->belongsTo(Competition::class, 'competition_id');
      }
  
      
      public function homeTeam()
      {
          return $this->belongsTo(Team::class, 'home_team_id');
      }
  
      public function awayTeam()
      {
          return $this->belongsTo(Team::class, 'away_team_id');
      }
}
