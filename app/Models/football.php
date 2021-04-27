<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class football extends Model
{
    use HasFactory;

    protected $table = 'footballs';

    protected $fillable =[
        'team',
        'team_id',
        'league_id',
        'points',
        'wins',
        'draws',
        'losses',
        'gd'
    ];

    protected $hidden =[
        'sport_id'
        ];
}
