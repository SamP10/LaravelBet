<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horse extends Model
{
    use HasFactory;

    protected $table = 'horses';

    protected $fillable=[
        'name',
        'jockey',
        'age',
        'wins',
    ];

    protected $hidden=[
        'sport_id'
    ];
}
