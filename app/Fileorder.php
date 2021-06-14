<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileorder extends Model
{
   protected $fillable = ['user_id','title','orderfile'];

    public function order()
    {
     return $this->belongsTo(Order::class,'Ocode','ocode');
    }
    public function user()
    {
     return $this->belongsTo(User::class,'user_id','id');
    }
}
