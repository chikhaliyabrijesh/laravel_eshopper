<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class UserGallaryModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'productimage','description'
    ];

    protected $table="gallaries";
}
