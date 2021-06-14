<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
        'ocode','user_id', 'otitle', 'client','progress', 'assigntp', 'servies',
        'product','Urgency','DeliveryDate','WriterLevel','Numberofpages',
        'CostPage','tamount','AcademicLevel','SubjectArea','Style','NumberofSources',
        'PreferredLanguageStyle','Description','Signed','status',
  ];


  public function assignuser()
    {
     return $this->belongsTo(OrderAssign::class,'ocode','order_code');
    }
    public function orderfile()
    {
     return $this->belongsTo(Fileorder::class,'ocode','Ocode');
    }
    
}
