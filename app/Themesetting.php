<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Themesetting extends Model
{
  protected $fillable = [
      'Sitename','CompanyLogo', 'Favicon', 'LoginTitle',
  ];
}
