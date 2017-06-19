<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
            protected $table = 'equipment';
    public $timestamps = false;
    protected $primaryKey = 'productId';
}
