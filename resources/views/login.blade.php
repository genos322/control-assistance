<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="{{asset('plugins/pnotify/pnotify.min.css')}}">
	<link rel="stylesheet" href="{{asset('viewreources/css/login.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap5_0.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/adminlte/font-awesome/css/font-awesome.min.css')}}">
	<script src="{{asset('plugins/pnotify/pnotify.min.js')}}"></script>

</head>
<body>
    <main>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				PNotify.alert({
    			  text: 'Notice me, senpai!',
				  delay: 200000,
				});
			});	
		</script>
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
					<div class="col-12 mt-2  password-field">
						<input type="password" id="txtPassword" class="w-100" name="txtPassword" placeholder="Contraseña" required>
						<span class="toggle-password" onclick="togglePasswordVisibility()">
							<i class="fa fa-eye" id="eyeCheck"></i>
						</span>
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
