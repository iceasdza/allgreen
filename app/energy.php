<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class energy extends Model
{
         protected $table = 'energy';
    public $timestamps = false;
    protected $primaryKey = 'productId';
}
