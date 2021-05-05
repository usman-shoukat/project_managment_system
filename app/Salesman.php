<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
  protected $fillable = [
      'fullname', 'email', 'vat','language', 'curency', 'phone',
      'mphone', 'fax', 'address','city', 'zipcode', 'state',
      'country', 'bank', 'swift','sortcode', 'account_holder',
      'account', 'iban',
  ];

}
