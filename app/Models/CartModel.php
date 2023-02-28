<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'pid','description','newprice','qty'
    ];

    protected $table="cart";
}
