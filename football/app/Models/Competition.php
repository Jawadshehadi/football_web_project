<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'area',
        'name',
        'code',
        'plan',
        'season',
       
    ];

    
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    
}
