<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Model\TUsers;

class AdminController extends Controller
{
   public function adminPanel(Request $request)
   {
      return view('admin.panel');
   }
   public function insert(Request $request)
   {
      return view('admin.insert');
   }
}
