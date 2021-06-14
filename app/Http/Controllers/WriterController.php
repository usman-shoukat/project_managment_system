<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Client;
use App\Companysetting;
use App\OrderAssign;
use App\Order;
use App\Fileorder;
use App\Themesetting;
use App\Assignordersearch;
use Auth;

class WriterController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth:writer');
  }
   public function index()
  {
    // $order = OrderAssign::where(array('assign') , Auth()->user()->username)->count();
    $order = Assignordersearch::where('assign' , Auth()->user()->username)->where('assignconfirm' , 1)->count();
    $torder = Order::count();
    $availableorder = Assignordersearch::where('assign' , Auth()->user()->username)->where('assignconfirm' , 0)->count();
    $admin = Admin::count();
    $logo = Themesetting::orderBy('created_at','desc')->first();
    $orderget = Assignordersearch::with('order')->where('assign' , Auth()->user()->username)->where('assignconfirm' , 0)->orderBy('created_at','desc')->paginate(20);
      return view('writer')->with('availableorder' , $availableorder)->with('order' , $order)->with('torder' , $torder)->with('orderget' , $orderget)->with('admin' , $admin)->with('logo' , $logo);
  }

  public function orderconfirm($id)
  {

      $order = Assignordersearch::where('order_code' , $id)->where('assign' , '!=' , Auth()->user()->username)->delete();
      $orderconfirmupdate = Assignordersearch::where('order_code' , $id)
      ->where('assign', Auth()->user()->username)->update(['assignconfirm' => 1]);
                toastr()->success('successfully Assigned Please Start Worked Sir!');

      return back();
       
  }
 


}
