<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
  use Notifiable;

      protected $guard = 'writer';

      protected $fillable = [
          'name', 'email', 'password',
      ];

      protected $hidden = [
          'password', 'remember_token',
      ];
}
