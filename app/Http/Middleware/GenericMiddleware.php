<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class GenericMiddleware
{
	public function handle($request, Closure $next, ...$params)
	{
		$urlAccess=false;

		$allowUrl=
		[
			['Administrador', '', 'mPrincipal', 'miPagePrincipal'],
			['Público', 'login', null, null],
			['Público', 'logout', null, null],
            ['Administrador', 'admin/panel', null, null],
            ['Administrador', 'admin/insert',null,null]
		];

		$myMainRole=Session::get('mainRole', '');
		$myMainRole=($myMainRole=='' ? 'Público' : $myMainRole);

		foreach($allowUrl as $value)
		{
			if($params[0]==$value[1])//params[0] is the url send by the user
			{
				if($value[0]=='Público')//permisos solo para usuarios públicos
				{
					$urlAccess=true;

					Session::put('menu', $value[2]);
					Session::put('subMenu', $value[3]);

					break;
				}

				foreach(explode(',', $value[0]) as $item)
				{
                    if(in_array($item, explode(',', $myMainRole)))
					{
						$urlAccess=true;

						Session::put('menu', $value[2]);
						Session::put('subMenu', $value[3]);

						break 2;
					}
				}
			}
		}

		if(!$urlAccess)
		{
			return redirect('login');
		}

		return $next($request);
	}
}
