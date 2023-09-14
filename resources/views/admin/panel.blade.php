@extends('template.layout')
@section('content')
		<section class="content-header">
			<h1>
				Dashboard
				<small>Hola, {{Session::get('user')}}</small>
			</h1>
		</section>
@endsection
