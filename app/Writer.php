<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Writer extends Authenticatable
{

      protected $guard = 'writer';

      protected $fillable = [
        'role', 'fullname', 'username','email', 'password', 'phone','ban',
      ];

      protected $hidden = [
          'password', 'remember_token',
      ];
}
