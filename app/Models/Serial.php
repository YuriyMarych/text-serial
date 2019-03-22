<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class Serial extends Model
{
    protected $fillable = [
        'title', 'description',
    ];

}
