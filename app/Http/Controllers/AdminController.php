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
use App\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  // adminfunction

  public function index()
  {
    $order = Order::where('status' , 'Active')->count();
    $torder = Order::count();
    $user = User::count();
    $admin = Admin::count();
    $logo = Themesetting::orderBy('created_at','desc')->first();
    $orderget = Order::orderBy('created_at','desc')->paginate(5);
      return view('admin')->with('user' , $user)->with('order' , $order)->with('torder' , $torder)->with('orderget' , $orderget)->with('admin' , $admin)->with('logo' , $logo);
  }
  public function admins()
  {
    $getadmin = Admin::orderBy('created_at','desc')->paginate(50);
        $logo = Themesetting::orderBy('created_at','desc')->first();

      return view('admin.admin')
      ->with('getadmin' , $getadmin)->with('logo' , $logo);
  }
  public function adminstore(Request $request)
  {
     $client = Admin::where('email',$request['email'])->first();
      if ($client) {
        toastr()->error('Email Already have!');
      return Redirect()->back()->with('success', 'The Message');
      }
    $admin = Admin::create([
      'fullname' => $request['fullname'],
      'username' => $request['username'],
      'email' => $request['email'],
      'phone' => $request['phone'],
      'password' => Hash::make($request['password']),
    ]);
          toastr()->success('successfully!');

    return Redirect()->back()->with('success', 'The Message');
  }
  function adminsearch(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = admin::
       where('username', 'like', '%'.$query.'%')
     ->orWhere('email', 'like', '%'.$query.'%')
     ->orWhere('phone', 'like', '%'.$query.'%')
     ->get();

    }
    $total_row = $data->count();
    if($total_row > 0)
    {
     foreach($data as $row)
     {
       $routeadmindell = route('del.admin',[$row->id]);
       $routeadminban = route('ban.admin',[$row->id]);
       $routeadminunban = route('unban.admin',[$row->id]);
       $routeadminedit = route('edit.admin.page',[$row->id]);
       if($row->ban == 1) {
         $output .= '
         <tr>
          <td>'.$row->username.'</td>
          <td>'.$row->email.'</td>
          <td>'.$row->phone.'</td>
          <td><a href="'.$routeadmindell.'" style="color: white;"
          class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a></td>
          <td><a href="'.$routeadminunban.'" style="color: white;"
          class="btn btn-primary btn-sm"><i class="fa fa-rss"></i></a></td>
          <td><a href="'.$routeadminedit.'" style="color: white;"
          class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a></td>
         </tr>
         ';
        }

       else{
        $output .= '
        <tr>
         <td>'.$row->username.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->phone.'</td>
         <td><a href="'.$routeadmindell.'" style="color: white;"
         class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a></td>
         <td><a href="'.$routeadminban.'" style="color: white;"
         class="btn btn-primary btn-sm"><i class="fa fa-ban"></i></a></td>
         <td><a href="'.$routeadminedit.'" style="color: white;"
         class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a></td>
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
     'table_data'  => $output,
     'total_data'  => $total_row
    );

    echo json_encode($data);
   }
  }
  public function adminban($id)
  {
    $del_admin = Admin::where('id', $id)->update(['ban' => 1]);
      toastr()->success('successfully!');

    return Redirect()->back()->with('success', 'The Message');
  }
  public function adminunban($id)
  {

    $del_admin = Admin::where('id', $id)->update(['ban' => 0]);
          toastr()->success('successfully!');

    return Redirect()->back()->with('success', 'The Message');
  }
  public function admindel($id)
  {
    $del_admin = Admin::where('id', $id)->delete();
          toastr()->success('successfully!');

    return Redirect()->back()->with('success', 'The Message');
  }
  public function adminupdate($id)
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $selectuser = Admin::where('id' ,$id)->first();

    return view('admin.admineditpage')->with('selectuser', $selectuser)->with('id', $id)->with('logo' , $logo);
  }
  public function adminedit(Request $request ,$id)
  {
    
    $del_admin = Admin::where('id', $id)
    ->update(['fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
              toastr()->success('successfully!');

    return back()->with('success', 'The Message');
    }


  //user function

  public function users()
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $getuser = User::orderBy('created_at','desc')->paginate(50);
      return view('admin.user')->with('getuser' , $getuser)->with('logo' , $logo);
      }
  public function userstore(Request $request)
  {

    $user = new User;
      $user->role = $request['role'];
      $user->fullname = $request['fullname'];
      $user->username = $request['username'];
      $user->email = $request['email'];
      $user->phone = $request['phone'];
      $user->password = Hash::make($request['password']);
    $user->save();
    if ($request['role'] = 'writer') {
       $user = new Writer;
      $user->role = $request['role'];
      $user->fullname = $request['fullname'];
      $user->username = $request['username'];
      $user->email = $request['email'];
      $user->phone = $request['phone'];
      $user->password = Hash::make($request['password']);
    $user->save();
    }
          toastr()->success('successfully!');

    return Redirect()->back()->with('success', 'The Message');

    }

  function usersearch(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = User::
       where('username', 'like', '%'.$query.'%')
       ->orWhere('email', 'like', '%'.$query.'%')
       ->orWhere('role', 'like', '%'.$query.'%')
       ->orWhere('phone', 'like', '%'.$query.'%')
       ->get();

    }
    $total_row = $data->count();
    if($total_row > 0)
    {
     foreach($data as $row)
     {
       $routeuserdel = route('del.user',[$row->id]);
       $routeban = route('ban.user',[$row->id]);
       $routeunban = route('unban.user',[$row->id]);
       $routeedit = route('edit.user.page',[$row->id]);
       if($row->ban == 1) {
         $output .= '
         <tr>
          <td>'.$row->username.'</td>
          <td>'.$row->email.'</td>
          <td>'.$row->role.'</td>
          <td>'.$row->phone.'</td>
          <td><a href="'.$routeuserdel.'" style="color: white;"
          class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
          <a href="'.$routeunban.'" style="color: white;"
          class="btn btn-primary btn-sm"><i class="fa fa-rss"></i></a>
          <a style="color: white;" href="'.$routeedit.'"
          class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a></td></td>
         </tr>
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
         <td>'.$row->username.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->role.'</td>
         <td>'.$row->phone.'</td>
         <td><a href="'.$routeuserdel.'" style="color: white;"
         class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
         <a href="'.$routeban.'" style="color: white;"
         class="btn btn-primary btn-sm"><i class="fa fa-ban"></i></a>
         <a style="color: white;" href="'.$routeedit.'"
         class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a></td></td>
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
     'total_data'  => $total_row
    );

    echo json_encode($data);
   }


}
public function userban($id)
{
  $client = User::where('id', $id)->first();
  $del_client = User::where('id', $id)->update(['ban' => 1]);
  $writer = Writer::where('email', $client->email)->update(['ban' => 1]);
      toastr()->success('successfully!');

  return Redirect()->back()->with('success', 'The Message');
}
public function userunban($id)
{
    $client = User::where('id', $id)->first();

  $del_client = User::where('id', $id)->update(['ban' => 0]);
    $writer = Writer::where('email', $client->email)->update(['ban' => 0]);

      toastr()->success('successfully!');

  return Redirect()->back()->with('success', 'The Message');
}
public function Userdel($id)
{
      $client = User::where('id', $id)->first();
    $writer = Writer::where('email', $client->email)->delete();


  $del_admin = User::where('id', $id)->delete();
      toastr()->success('successfully!');

  return Redirect()->back()->with('success', 'The Message');
}
public function userupdate($id)
{
      $logo = Themesetting::orderBy('created_at','desc')->first();

  $selectuser = User::where('id' ,$id)->first();
  return view('admin.editform')->with('selectuser', $selectuser)->with('id', $id)->with('logo' , $logo);
}

  public function useredit(Request $request ,$id)
  {
if($request['role'] == 'writer'){
$client = User::where('id', $id)->first();
$client = Writer::where('email', $client->email)->first();

if ($client) {
    $client = User::where('id', $id)->first();
    $writer = Writer::where('email', $client->email)->update(['role' => $request['role'],'fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);

    $del_admin = User::where('id', $id)
    ->update(['role' => $request['role'],'fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
              toastr()->success('successfully!');

        return Redirect()->route('user')->with('success', 'The Message');

  }else{
    $user = new Writer;
      $user->role = $request['role'];
      $user->fullname = $request['fullname'];
      $user->username = $request['username'];
      $user->email = $request['email'];
      $user->phone = $request['phone'];
      $user->password = Hash::make($request['password']);
    $user->save();

    $del_admin = User::where('id', $id)
    ->update(['role' => $request['role'],'fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
     toastr()->success('successfully!');
    return Redirect()->route('user')->with('success', 'The Message');
    
  }

    }
    if($request['role'] == 'client'){

    $client = User::where('id', $id)->first();
$client = Writer::where('email', $client->email)->first();

if ($client) {
    $client = User::where('id', $id)->first();
    $writer = Writer::where('email', $client->email)->delete();
   

    $del_admin = User::where('id', $id)
    ->update(['role' => $request['role'],'fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
              toastr()->success('successfully!');

        return Redirect()->route('user')->with('success', 'The Message');

  }else{
    $user = new Writer;
      $user->role = $request['role'];
      $user->fullname = $request['fullname'];
      $user->username = $request['username'];
      $user->email = $request['email'];
      $user->phone = $request['phone'];
      $user->password = Hash::make($request['password']);
    $user->save();

    $del_admin = User::where('id', $id)
    ->update(['role' => $request['role'],'fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
     toastr()->success('successfully!');
    return Redirect()->route('user')->with('success', 'The Message');
    
  }

    }
}
    public function usersetting()
    {
          $logo = Themesetting::orderBy('created_at','desc')->first();

      $adminset = Admin::where('id', Auth::id())->first();
      return view('admin.adminsetting')->with('adminset', $adminset)->with('logo' , $logo);
    }

    public function setting()
    {
          $logo = Themesetting::orderBy('created_at','desc')->first();

      $theme = Themesetting::where('id', 1)->first();
     $setting = Companysetting::where('id', 1)->first();
      return view('admin.setting')->with('setting', $setting)->with('theme', $theme)->with('logo' , $logo);
    }
    public function settingstore(Request $request)
    {
     $setting = Companysetting::where('id', 1)->update(['Companyn' => $request['Companyn'],
     'Contact' => $request['Contact'],'Companyadd' => $request['Companyadd'],
     'City' => $request['City'],'Companye' => $request['Companye']
     ,'Companyp' => $request['Companyp'],'Website' => $request['Website'],
    ]);
           toastr()->success('successfully!');

    return Redirect()->back()->with('success', 'The Message');
    }

    public function themestore(Request $request)
  {
          $setting = Themesetting::where('id' , 1)->first();
      if($request->file('CompanyLogo')){
     if($request->hasFile('CompanyLogo')){
          $image = $request->file('CompanyLogo');
          $filename = $image->getClientOriginalExtension();
          $request->CompanyLogo->move(public_path('/assets/'), $filename);
     }
      $Managersave = Themesetting::where('id' ,1)
      ->update(['Sitename' => $request['Sitename'],
      'CompanyLogo' => $filename,
     'LoginTitle' => $request['LoginTitle'],
     'Favicon' => $setting->Favicon]);
      toastr()->success('successfully!');

      return redirect()->back();

}
else{

     $Managersave = Themesetting::where('id' ,1)
     ->update(['Sitename' => $request['Sitename'],
     'CompanyLogo' => $setting->CompanyLogo,
     'LoginTitle' => $request['LoginTitle'],
     'Favicon' => $setting->Favicon]);
      toastr()->success('successfully!');

      return redirect()->back();
  }

}

public function order()
{
      $logo = Themesetting::orderBy('created_at','desc')->first();

   $getorder = Order::with('assignuser')->orderBy('created_at','desc')->paginate(10);

   $Activeorder = Order::where('status','Active')->count();
   $OnHoldorder = Order::where('status','On Hold')->count();
   $Doneorder = Order::where('status','Done')->count();
   $Revisionorder = Order::where('status','Revision')->count();
   $Cancelledorder = Order::where('status','Cancelled')->count();
   $overallorder = Order::count();

  return view('admin.order')->with('getorder' ,$getorder)->with('Activeorder' ,$Activeorder)->with('OnHoldorder' ,$OnHoldorder)->with('Doneorder' ,$Doneorder)->with('Revisionorder' ,$Revisionorder)->with('overallorder' ,$overallorder)->with('Cancelledorder' ,$Cancelledorder)->with('logo' , $logo);
}
public function createorder(){
  $client = Client::get();
      $logo = Themesetting::orderBy('created_at','desc')->first();

  return view('admin.createorder')->with('client',$client)->with('logo' , $logo);
}
public function view($id)
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $vieworder = Order::with('assignuser')->where('ocode', $id)->first();
    $vieworderassign = Order::with('assignuser')->where('ocode', $id)->get();
    $vieworderfile = Fileorder::with('user')->with('order')->where('ocode', $id)->get();
    $client = Client::get();

    return view('admin.orderview')->with('vieworder', $vieworder)->with('client',$client)->with('id',$id)->with('vieworderassign',$vieworderassign)->with('vieworderfile',$vieworderfile)->with('logo' , $logo);
  }
public function assignorder($id)
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $vieworder = Order::where('ocode', $id)->first();
    $User = User::where('role', 'writer')->get();

    return view('admin.assignorder')->with('vieworder' , $vieworder)->with('User' , $User)->with('logo' , $logo);
  }

  public function orderfile($id)
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $vieworder = Order::where('ocode', $id)->first();
    $User = User::get();

    return view('admin.orderfile')->with('vieworder' , $vieworder)->with('User' , $User)->with('logo' , $logo);
  }

 public function orderfilesave(Request $request ,$id)
  {

    
  if($request->hasFile('orderfile')) {
    $images = $request->file('orderfile');
    foreach($images as $image) {
           $gallery = new Fileorder();

       $gallery->user_id = "admin";
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


    return Redirect()->route('admin.Order')->with('success', 'The Message');
  }
public function orderfiledel($id)
  {
    $vieworder = Fileorder::where('id', $id)->delete();
      toastr()->success('successfully!');

    return back();
  }
  public function editview($id)
  {
        $logo = Themesetting::orderBy('created_at','desc')->first();

    $vieworder = Order::where('ocode', $id)->first();
  $client = Client::get();

    return view('admin.orderupdate')->with('vieworder',$vieworder)->with('id',$id)->with('client',$client)->with('logo' , $logo);
  }

  public function editsave(Request $request,$id){

       $createorder = Order::where('ocode' ,$id)->update([
      'ocode' => $request['ocode'],
      'otitle' => $request['otitle'],
      'client' => $request['client'],
      'progress' => $request['progress'],
      'servies' => $request['servies'],
      'product' => $request['product'],
      'Urgency' => $request['Urgency'],
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
      'status' => $request['status'],
    ]);
             toastr()->success('successfully!');

    return back();
    }
}
