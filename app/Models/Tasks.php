<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'task'; //specify the table WITHOUT AN S
    
    protected $fillable = [
        'task',
        'author'
    ];
}
