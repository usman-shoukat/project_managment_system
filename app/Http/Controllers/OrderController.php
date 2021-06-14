<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Order;
use App\OrderAssign;
use App\Companysetting;
use App\Themesetting;
use App\Client;
use App\Fileorder;
use App\Assignordersearch;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request){
       $createorder = Order::create([
      'ocode' => $request['ocode'],
      'otitle' => $request['otitle'],
      'client' => $request['client'],
      'progress' => $request['progress'],
      'servies' => $request['servies'],
      'product' => $request['product'],
      'Urgency' => $request['Urgency'],
      'DeliveryDate' => $request['DeliveryDate'],
      'WriterLevel' => $request['WriterLevel'],
      'Numberofpages' => $request['Numberofpages'],
      'CostPage' => $request['CostPage'],
      'tamount' => $request['tamount'],
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

    return Redirect()->route('admin.Order')->with('success', 'The Message');
    }
    public function clonesave($id){

       $clonesave = Order::where('ocode', $id)->first();
       $createorder = Order::create([
      'ocode' => rand(1245,6789),
      'otitle' => $clonesave->otitle,
      'client' => $clonesave->client,
      'progress' => $clonesave->progress,
      'servies' => $clonesave->servies,
      'product' => $clonesave->product,
      'Urgency' => $clonesave->Urgency,
      'DeliveryDate' => $clonesave->DeliveryDate,
      'Numberofpages' => $clonesave->Numberofpages,
      'CostPage' => $clonesave->CostPage,
      'tamount' => $clonesave->tamount,
      'AcademicLevel' => $clonesave->AcademicLevel,
      'SubjectArea' => $clonesave->SubjectArea,
      'Style' => $clonesave->Style,
      'NumberofSources' => $clonesave->NumberofSources,
      'PreferredLanguageStyle' => $clonesave->PreferredLanguageStyle,
      'Description' => $clonesave->Description,
      'Signed' => $clonesave->Signed,
      'status' => "On Hold",
    ]);
             toastr()->success('successfully!');

    return Redirect()->route('admin.Order')->with('success', 'The Message');
    }

    function search(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Order::
         where('ocode', 'like', '%'.$query.'%')
         ->orWhere('otitle', 'like', '%'.$query.'%')
         ->orWhere('client', 'like', '%'.$query.'%')
         ->orWhere('status', 'like', '%'.$query.'%')
         ->orWhere('Numberofpages', 'like', '%'.$query.'%')
         ->orWhere('tamount', 'like', '%'.$query.'%')
         ->get();

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
         $route = route('del.order',[$row->id]);
         $routeview = route('view.order',[$row->ocode]);
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
         <td>'.$row->client.'</td>
         <td>'.$row->ocode.'</td>
         <td><span class="badge badge-info">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
         <td>'.$row->tamount.'</td>
         <td><a href="'.$route.'" style="color: white;"
           class="btn btn-primary btn-sm">Delete</a></td>        </tr>
        ';       }
        if ($Actives == $Active1) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td>'.$row->client.'</td>
         <td>'.$row->ocode.'</td>
         <td><span class="badge badge-warning">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
         <td>'.$row->tamount.'</td>
         <td><a href="'.$route.'" style="color: white;"
           class="btn btn-primary btn-sm">Delete</a></td>        </tr>
        ';       }
        if ($Actives == $Active2) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td>'.$row->client.'</td>
         <td>'.$row->ocode.'</td>
         <td><span class="badge badge-success">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
         <td>'.$row->tamount.'</td>
         <td><a href="'.$route.'" style="color: white;"
           class="btn btn-primary btn-sm">Delete</a></td>        </tr>
        ';       }
        if ($Actives == $Active3) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td>'.$row->client.'</td>
         <td>'.$row->ocode.'</td>
         <td><span class="badge badge-secondary">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
         <td>'.$row->tamount.'</td>
         <td><a href="'.$route.'" style="color: white;"
           class="btn btn-primary btn-sm">Delete</a></td>        </tr>
        ';       }
        if ($Actives == $Active4) {
 $output .= '
        <tr>
         <td>'.$row->ocode.'</td>
         <td><a href="'.$routeview.'">'.$row->otitle.'</a></td>
         <td>'.$row->client.'</td>
         <td>'.$row->ocode.'</td>
         <td><span class="badge badge-danger">'.$row->status.'</span></td>   
         <td>'.$row->Numberofpages.'</td>
         <td>'.$row->tamount.'</td>
         <td><a href="'.$route.'" style="color: white;"
           class="btn btn-primary btn-sm">Delete</a></td>        </tr>
        ';       }
       
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="8">No Data Found</td>
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
    public function del($id)
  {
    $del_admin = Order::where('id', $id)->delete();
      toastr()->success('successfully!');

    return Redirect()->route('admin.Order')->with('success', 'The Message');
  }
   
   
  function assignsearch(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = User::
       where('username', 'like', '%'.$query.'%')
       ->orWhere('role', 'like', '%'.$query.'%')
       ->get();

    }
    if($data)
    {
     foreach($data as $row)
     {
       
       if($row->ban == 0) {
         $output .= '
         <label for="two"> <input style="margin-left: 5px;" multiple="multiple" type="checkbox" id="two" />'.$row->username.'</label> 
         ';
        }

       // else
       // {
       //  $output = '
       //  <tr>
       //   <td align="center" colspan="5">No Data Found</td>
       //  </tr>
       //  ';
       // }

       else{
        $output .= '
        <tr>
        <td align="center" colspan="5">User Ban</td>
       </tr>
        ';

      }

      }
}
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }

    $data = array(
     'user_table_data'  => $output,
    );

    echo json_encode($data);
   }
}
    public function assignsaveorder(Request $request ,$id){

         $check = OrderAssign::where('order_code',$id)->first();
         $check2 = Assignordersearch::where('order_code',$id)->first();
         if ($check or $check2) {
          $del1 = OrderAssign::where('order_code',$id)->delete();
          $del2 = Assignordersearch::where('order_code',$id)->delete();


    }
  
        $input['order_code'] = $id;
        $input['assign'] = 
        implode(",",$request['assign']);
        OrderAssign::create($input);
if($request->input('assign')) {
    $images = $request->input('assign');
    foreach($images as $image) {
           $gallery = new Assignordersearch();
      $gallery->assignconfirm = $request['assignconfirm'];
     $gallery->order_code = $id;
       $gallery->assign = $image;

  $gallery->save();
    
  }
  }
         

    
           toastr()->success('successfully!');

    return Redirect()->route('admin.Order')->with('success', 'The Message');
    }

   

}