<?php
namespace App\Validation;
use Illuminate\Support\Facades\Validator;

class UserValidation
{
	private $globalMessage=[];
    public function validateLogin($request)
    {
        $validator = Validator::make([
            
            'email' => $request->input('txtEmail'),
            'password' => $request->input('txtPassword'),
        ],
        [
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email debe ser un email válido',
            'password.required' => 'El campo password es requerido',
        ]
    );

        if($validator->fails())
        {
            $errors = $validator->errors()->all();

            foreach($errors as $value)
            {
                $this->globalMessage[] = $value;
            }
        }
        return $this->globalMessage;

    }
}
?>