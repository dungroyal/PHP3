<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $table='flights';
    protected $fillable=['origin','destination','duration'];
    public $timestamps = false;
}
