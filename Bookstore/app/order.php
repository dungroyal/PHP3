<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table='orderdetail';
    protected $fillable=['idUser','idProduct','quantity','status'];
    public $timestamps = false;
}
