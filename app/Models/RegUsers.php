<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Authenticatable;

class RegUsers extends Model implements Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'reg_users';

    protected $attributes = [
        'status' => 1,
        'access' => 1  
    ];

    protected $fillable = [
        'username',
        'email',
        'password'
    ];
}