<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'productimage','productname','categoryid','subcategoryid','description','qty','oldprice','newprice'
    ];

    protected $table="addproducts";
}
