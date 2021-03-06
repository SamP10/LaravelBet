<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $table = 'sports';

    protected $fillable = [
        'match_id',
        'away_team',
        'home_team'
    ];

    public function away_team(){
        return $this -> belongsTo(football::class, 'team');
    }
    public function home_team(){
        return $this -> belongsTo(football::class, 'team');
    }

}
