<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstName',
        'lastName',
        'dateOfAdmission',
        'photo',
        'birthdate',
    ];
}