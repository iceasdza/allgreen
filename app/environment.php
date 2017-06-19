<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class environment extends Model
{
    protected $table = 'environment';
    public $timestamps = false;
    protected $primaryKey = 'productId';
}
