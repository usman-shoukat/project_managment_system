<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = [
      'name', 'email', 'language','currency', 'phone', 'mphone',
      'fax', 'address','city', 'zipcode', 'state',
      'country', 'website', 'skype','linkedin', 'facebook',
      'twitter',
  ];
}
