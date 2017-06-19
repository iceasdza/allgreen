<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publics extends Model
{
        protected $table = 'public';
    public $timestamps = false;
    protected $primaryKey = 'productId';
}
