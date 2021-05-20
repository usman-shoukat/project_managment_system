<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companysetting extends Model
{
  protected $fillable = [
      'Companyn', 'Contact', 'Companyadd','City', 'Companye', 'Companyp',
      'Website',
  ];
}
