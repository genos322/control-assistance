<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Validation\UserValidation;
use DB;

use App\Model\TUsers;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    private $blocMessage=[];
    public function actionLogin(Request $request)
    {
        $this->blocMessage = (new UserValidation())->validateLogin($request);
        if($this->blocMessage)
        {
            Session::flash('messageGlobal', $this->blocMessage);
            Session::flash('type', 'error');

            return redirect()->route('login');
        }
        
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
?>