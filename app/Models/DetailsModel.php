<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DetailsModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'productimage','productname','description','qty','oldprice','newprice'
    ];

    protected $table="addproducts";
}
