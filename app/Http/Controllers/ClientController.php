<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function client()
    {
      $get_client = Client::paginate(50);
        return view('admin.clients')->with('get_client',$get_client);
    }

    function clientsearch(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Client::
         where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('city', 'like', '%'.$query.'%')
         ->orWhere('country', 'like', '%'.$query.'%')
         ->orWhere('mphone', 'like', '%'.$query.'%')
         ->get();

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
         $route = route('del.client',[$row->id]);
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->City.'</td>
         <td>'.$row->country.'</td>
         <td>'.$row->mphone.'</td>
         <td><a href="'.$route.'" style="color: white;"
           class="btn btn-primary btn-sm">Delete</a></td>        </tr>
        ';
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

    public function clientstore(Request $request)
    {
      $store_client = Client::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'language' => $request['language'],
          'currency' => $request['currency'],
          'phone' => $request['phone'],
          'mphone' => $request['mphone'],
          'fax' => $request['fax'],
          'address' => $request['address'],
          'city' => $request['city'],
          'zipcode' => $request['zipcode'],
          'state' => $request['state'],
          'country' => $request['country'],
          'website' => $request['website'],
          'skype' => $request['skype'],
          'linkedin' => $request['linkedin'],
          'facebook' => $request['facebook'],
          'twitter' => $request['twitter'],
      ]);
      return Redirect()->back()->with('success', 'The Message');
    }

    public function clientdel($id)
    {
      $del_client = Client::where('id', $id)->delete();

      return Redirect()->back()->with('success', 'The Message');
    }

}
