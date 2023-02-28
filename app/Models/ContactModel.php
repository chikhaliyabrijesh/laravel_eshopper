<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactModel extends Model
{
    use HasFactory,Notifiable;
    Protected $fillable=[
        'name','email','subject','message'
    ];

    protected $table="contacts";
}
