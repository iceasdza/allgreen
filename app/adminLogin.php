<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class adminLogin extends Authenticatable
{
                   protected $table = 'adminLogin';
                 protected $primaryKey = 'user';
                     public $timestamps = false;
}
