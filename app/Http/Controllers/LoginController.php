<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Model\TUsers;

class LoginController extends Controller
{
 public function validarLogin(Request $request)
 {
    $user = TUsers::where('email', $request->input('txtEmail'))->first();
    if(!$user || $user->password != $request->input('txtPassword'))
    {
        return redirect()->route('login')->with('error', 'Usuario o contraseña incorrectos');
    }
    else
    {
        return view('admin.panel', ['user' => $request->input('txtEmail')] );
    }
 }
}
