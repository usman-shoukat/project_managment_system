<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Companysetting;
use App\Themesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  // adminfunction

  public function index()
  {
      return view('admin');
  }
  public function admins()
  {
    $getadmin = Admin::orderBy('created_at','desc')->paginate(50);
      return view('admin.admin')
      ->with('getadmin' , $getadmin);
  }
  public function adminstore(Request $request)
  {
    $admin = Admin::create([
      'fullname' => $request['fullname'],
      'username' => $request['username'],
      'email' => $request['email'],
      'phone' => $request['phone'],
      'password' => Hash::make($request['password']),
    ]);
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

    return Redirect()->back()->with('success', 'The Message');
  }
  public function adminunban($id)
  {
    $del_admin = Admin::where('id', $id)->update(['ban' => 0]);

    return Redirect()->back()->with('success', 'The Message');
  }
  public function admindel($id)
  {
    $del_admin = Admin::where('id', $id)->delete();

    return Redirect()->back()->with('success', 'The Message');
  }
  public function adminupdate($id)
  {
    $selectuser = Admin::where('id' ,$id)->first();
    return view('admin.admineditpage')->with('selectuser', $selectuser)->with('id', $id);
  }
  public function adminedit(Request $request ,$id)
  {
    $del_admin = Admin::where('id', $id)
    ->update(['fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
    return Redirect()->route('admin')->with('success', 'The Message');
    }


  //user function

  public function users()
  {
    $getuser = User::orderBy('created_at','desc')->paginate(50);
      return view('admin.user')->with('getuser' , $getuser);
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
  $del_client = User::where('id', $id)->update(['ban' => 1]);

  return Redirect()->back()->with('success', 'The Message');
}
public function userunban($id)
{
  $del_client = User::where('id', $id)->update(['ban' => 0]);

  return Redirect()->back()->with('success', 'The Message');
}
public function Userdel($id)
{
  $del_admin = User::where('id', $id)->delete();

  return Redirect()->back()->with('success', 'The Message');
}
public function userupdate($id)
{
  $selectuser = User::where('id' ,$id)->first();
  return view('admin.editform')->with('selectuser', $selectuser)->with('id', $id);
}

  public function useredit(Request $request ,$id)
  {
    $del_admin = User::where('id', $id)
    ->update(['fullname' => $request['fullname'],
    'username' => $request['username'],'email' => $request['email'],
    'phone' => $request['phone'],'password' => Hash::make($request['password']),
   ]);
    return Redirect()->route('user')->with('success', 'The Message');
    }

    public function setting()
    {
      $theme = Themesetting::where('id', 1)->first();
     $setting = Companysetting::where('id', 1)->first();
      return view('admin.setting')->with('setting', $setting)->with('theme', $theme);
    }
    public function settingstore(Request $request)
    {
     $setting = Companysetting::where('id', 1)->update(['Companyn' => $request['Companyn'],
     'Contact' => $request['Contact'],'Companyadd' => $request['Companyadd'],
     'City' => $request['City'],'Companye' => $request['Companye']
     ,'Companyp' => $request['Companyp'],'Website' => $request['Website'],
    ]);
    return Redirect()->back()->with('success', 'The Message');
    }

    public function themestore(Request $request)
  {
          $setting = Themesetting::where('id' , 1)->first();
      if($request->file('CompanyLogo')){
     if($request->hasFile('CompanyLogo')){
          $image = $request->file('CompanyLogo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $request->CompanyLogo->move(public_path('/assets/img/brand/'), $filename);
     }
      $Managersave = Themesetting::where('id' ,1)
      ->update(['Sitename' => $request['Sitename'],
      'CompanyLogo' => $filename,
     'LoginTitle' => $request['LoginTitle'],
     'Favicon' => $setting->Favicon]);

      return redirect()->back();

}
else{

     $Managersave = Themesetting::where('id' ,1)
     ->update(['Sitename' => $request['Sitename'],
     'CompanyLogo' => $setting->CompanyLogo,
     'LoginTitle' => $request['LoginTitle'],
     'Favicon' => $setting->Favicon]);

      return redirect()->back();
  }

}

public function order()
{

  return view('admin.order');
}



}
