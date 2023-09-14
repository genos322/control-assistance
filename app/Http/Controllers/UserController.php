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
    private $messageGlobal=[];
    public function actionLogin(Request $request, Session $session)
    {
        if($_POST)
        {   
            $session::flush();
            try{
                $this->messageGlobal = (new UserValidation())->validateLogin($request);
                if($this->messageGlobal)
                {
                    $session::flash('messageGlobal', $this->messageGlobal);
                    $session::flash('type', 'error');
        
                    return redirect()->route('login');
                }
                
                $user = TUsers::where('email', $request->input('txtEmail'))->first();
                if(!$user || $user->password != $request->input('txtPassword'))
                {
                    $session::flash('messageGlobal', ['Usuario o contraseña incorrectos']);
                    $session::flash('type', 'error');
                    return redirect()->route('login');
                }
        
                $session::put('user', $user->name);
                $session::put('mainRole', $user->rol);
                return view('admin.panel');
            }
            catch(\Exception $e)
            {
                $session::flash('messageGlobal', ['Error al iniciar sesión']);
                $session::flash('type', 'error');
    
                return redirect()->route('login');
            }
        }
        return view('login');
    }
}
?>