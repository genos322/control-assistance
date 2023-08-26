<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Validation\UserValidation;
use DB;

use App\Model\TUsers;
use Session;


class UserController extends Controller
{
    private $messageGlobal=[];
    public function actionLogin(Request $request)
    {
        $this->messageGlobal = (new UserValidation())->validateLogin($request);
        if($this->messageGlobal)
        {
            Session::flash('messageGlobal', $this->messageGlobal);
            Session::flash('type', 'error');

            return redirect()->route('login');
        }
        
        $user = TUsers::where('email', $request->input('txtEmail'))->first();
        if(!$user || $user->password != $request->input('txtPassword'))
        {
            Session::flash('messageGlobal', ['Usuario o contraseña incorrectos']);
            return redirect()->route('login');
        }
        else
        {
            Session::put('user', $user->name);
            return view('admin.panel', ['user' => $request->input('txtEmail')] );
        }
    }
}
?>