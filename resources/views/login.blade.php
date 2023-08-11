<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="{{asset('viewreources/css/login.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap5_0.css')}}">
</head>
<body>    
    <main>
		<div class="form-box">
			<form class="form needs-validation" action="{{url('admin/panel')}}"  method="POST" novalidate>
				<span class="title">Iniciar Sesión</span>
				<span class="subtitle">Ingrese su correo y contraseña</span>
				<div class="row">
					<div class="col-12 position-relative">
						<input type="email" id="txtEmail" class="w-100" name="txtEmail" placeholder="Correo" required>
						<div class="invalid-tooltip">
							Ingrese un correo válido.
						</div>
					</div>
					<div class="col-12 mt-2  position-relative">
						<input type="password" id="txtPassword" class="w-100" name="txtPassword" placeholder="Contraseña" required>
						<div class="invalid-tooltip">
							Contraseña requerida.
						</div>
					</div>
				</div>
					@csrf
					<button type="submit">Ingresar</button>
			</form>
		</div>
    </main>
</body>
</html>
<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>l
<script src="{{asset('viewreources/js/login.js')}}"></script>
