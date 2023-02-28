<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RegisterModel extends Model
{
    use HasFactory,Notifiable;

    Protected $fillable=[
        'name','email','password','mobile','address'
    ];

    protected $table="customers";
}
