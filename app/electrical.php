<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class electrical extends Model
{
            protected $table = 'electrical';
    public $timestamps = false;
    protected $primaryKey = 'productId';
}
