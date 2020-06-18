<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table='products';
    protected $fillable=['nameProduct','Description','specialPrice'];
    public $timestamps = false;
}