<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
  use Notifiable;

     protected $guard = 'admin';

     protected $fillable = [
         'fullname','username', 'email', 'password', 'phone','ban'
     ];

     protected $hidden = [
         'password', 'remember_token',
     ];
}
