<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name',
        'description',
        'hour',
        'hour_init',
        'hour_end',
        'state',
        'comment'
    ];
    use HasFactory;
}