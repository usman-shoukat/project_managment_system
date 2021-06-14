<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Themesetting;

class SalesmanController extends Controller
{
    public function showwellcome()
   {
        $logo = Themesetting::orderBy('created_at','desc')->first();

       return view('welcome', ['url' => 'admin'])->with('logo' , $logo);
   }
   
}
