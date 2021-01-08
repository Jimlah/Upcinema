<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegUsers extends Model
{
    use HasFactory, Notifiable;

    public $status = 1;

    protected $fillable = [
        'username',
        'email',
        'password',
        'status'
    ];
}
