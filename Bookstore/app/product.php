<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='products';
    protected $fillable=['idProduct','nameProduct','NXB','images','Description','priceProduct','specialPrice','authorProduct','status','idCategory'];
    public $timestamps = false;
}
