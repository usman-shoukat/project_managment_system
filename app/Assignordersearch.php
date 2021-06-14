<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignordersearch extends Model
{
         protected $fillable = ['order_code','assign','assignconfirm'];
public function order()
    {
     return $this->belongsTo(Order::class,'order_code','ocode');
    }
}
