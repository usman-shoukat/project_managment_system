<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Client;
use App\Companysetting;
use App\OrderAssign;
use App\Order;
use App\Fileorder;
use App\Themesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     $order = Order::where('user_id' , Auth::id())->where('status' , 'Active')->count();
     $torder = Order::where('user_id' , Auth::id())->count();
     $orderget = Order::where('user_id' , Auth::id())->orderBy('created_at','desc')->limit(5)->get();

    $logo = Themesetting::orderBy('created_at','desc')->first();

        return view('home')->with('logo' , $logo)->with('order' , $order)->with('torder' , $torder)->with('orderget' , $orderget);
    }
    public function view($id)
    {
     $order = Order::where('user_id' , Auth::id())->where('status' , 'Active')->count();
     $torder = Order::where('user_id' , Auth::id())->count();
     $orderget = Order::where('user_id' , Auth::id())->orderBy('created_at','desc')->paginate(5);

    $logo = Themesetting::orderBy('created_at','desc')->first();
 $vieworder = Order::with('assignuser')->where('ocode', $id)->first();
    $vieworderassign = Order::with('assignuser')->where('ocode', $id)->get();
    $vieworderfile = Fileorder::with('user')->with('order')->where('ocode', $id)->get();

        return view('client.orderview')->with('logo' , $logo)->with('order' , $order)->with('torder' , $torder)->with('orderget' , $orderget)->with('vieworder', $vieworder)->with('vieworderassign',$vieworderassign)->with('vieworderfile',$vieworderfile);
    }
     public function orderfile($id)
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $vieworder = Order::where('ocode', $id)->first();
    $User = User::get();

    return view('client.orderfile')->with('vieworder' , $vieworder)->with('User' , $User)->with('logo' , $logo);
  }
 public function orderfilesave(Request $request ,$id)
  {

    
  if($request->hasFile('orderfile')) {
    $images = $request->file('orderfile');
    foreach($images as $image) {
           $gallery = new Fileorder();

       $gallery->user_id = Auth::id();
     $gallery->Ocode = $id;
     $gallery->title = $request->title;
      $path = $image->getClientOriginalName();
      $name = $path;
      $orderfile = $image->move(public_path().'/orderfiles/', $name);
      //$gallery->image = $request->file('image')->storeAs('public/gallery-images', $name);
       $gallery->orderfile = $path;

  $gallery->save();
    }
  }
          toastr()->success('successfully!');


    return back();
  }
      public function orderfiledel($id)
  {
    $vieworder = Fileorder::where('id', $id)->delete();
      toastr()->success('successfully!');

    return back();
  }

      public function setting()
    {
          $logo = Themesetting::orderBy('created_at','desc')->first();

      $adminset = User::where('id', Auth::id())->first();
      return view('client.setting')->with('adminset', $adminset)->with('logo' , $logo);
    }
     public function edit(Request $request ,$id)
  {

    $client = User::where('id', $id)
    ->update(['fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
              toastr()->success('successfully!');

    return back()->with('success', 'The Message');
    }


public function order()
{
      $logo = Themesetting::orderBy('created_at','desc')->first();

   $getorder = Order::with('assignuser')->where('user_id',Auth::id())->orderBy('created_at','desc')->paginate(10);

   $Activeorder = Order::where('status','Active')->where('user_id',Auth::id())->count();
   $OnHoldorder = Order::where('status','On Hold')->where('user_id',Auth::id())->count();
   $Doneorder = Order::where('status','Done')->where('user_id',Auth::id())->count();
   $Revisionorder = Order::where('status','Revision')->where('user_id',Auth::id())->count();
   $Cancelledorder = Order::where('status','Cancelled')->where('user_id',Auth::id())->count();
   $overallorder = Order::where('user_id',Auth::id())->count();

  return view('client.order')->with('getorder' ,$getorder)->with('Activeorder' ,$Activeorder)->with('OnHoldorder' ,$OnHoldorder)->with('Doneorder' ,$Doneorder)->with('Revisionorder' ,$Revisionorder)->with('overallorder' ,$overallorder)->with('Cancelledorder' ,$Cancelledorder)->with('logo' , $logo);
}
   public function createorder(){
  $client = Client::get();
      $logo = Themesetting::orderBy('created_at','desc')->first();

  return view('client.createorder')->with('client',$client)->with('logo' , $logo);
}
  function search(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
$data = Order::where('user_id',Auth::id())->where('ocode', 'like', '%'.$query.'%')
         ->get();

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
         $routeview = route('view.userorder',[$row->ocode]);
         $Actives = $row->status;
         $Active = 'Active';
         $Active1 = 'On Hold';
         $Active2 = 'Done';
         $Active3 = 'Revision';
         $Active4 = 'Cancelled';

       if ($Actives == $Active) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td><span class="badge badge-info">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
                  </tr>
        ';       }
        if ($Actives == $Active1) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td><span class="badge badge-warning">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
                 </tr>
        ';       }
        if ($Actives == $Active2) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td><span class="badge badge-success">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
                </tr>
        ';       }
        if ($Actives == $Active3) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td><span class="badge badge-secondary">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
               </tr>
        ';       }
        if ($Actives == $Active4) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td><span class="badge badge-danger">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
                 </tr>
        ';       }
       
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="4">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    public function clientorder(Request $request){
        $id  = Auth::user()->id;
       $createorder = Order::create([
      'user_id' => $id,
      'ocode' => $request['ocode'],
      'otitle' => $request['otitle'],
      'client' => Auth()->user()->username,
      'progress' => $request['progress'],
      'servies' => $request['servies'],
      'product' => $request['product'],
      'Urgency' => $request['Urgency'],
      'DeliveryDate' => $request['DeliveryDate'],
      'WriterLevel' => $request['WriterLevel'],
      'Numberofpages' => $request['Numberofpages'],
      'AcademicLevel' => $request['AcademicLevel'],
      'SubjectArea' => $request['SubjectArea'],
      'Style' => $request['Style'],
      'NumberofSources' => $request['NumberofSources'],
      'PreferredLanguageStyle' => $request['PreferredLanguageStyle'],
      'Description' => $request['Description'],
      'Signed' => $request['Signed'],
      'status' => "On Hold",
    ]);
             toastr()->success('successfully!');

    return Redirect()->route('clientOrder')->with('success', 'The Message');
    }



}
