<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use Notifiable;
    protected $fillable = [
        'Make', 'Model', 'Year',
    ];
    protected $casts = [
        'Year' => 'integer',
    ];
}
