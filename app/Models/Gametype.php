<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gametype extends Model
{
    use HasFactory;

    protected $table = 'gametypes';

    protected $fillable = [
        'game_type',
    ];
}
