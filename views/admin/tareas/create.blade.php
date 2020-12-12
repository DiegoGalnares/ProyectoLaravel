@extends('layouts.admin')
@section('content')
<main class="container main-crear-curso text-md-center">
	<!-- Title -->
	<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Crear una tarea</h1>
	<div class="mt-md-4 mt-4">
		<form class="mx-md-auto" action="{{route('admintareas.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input class="d-block" type="text" name="title" placeholder="Título">
			<textarea name="description" rows="2" cols="50" placeholder="Descripción"></textarea>
			<label class="d-block text-left">Fecha de Entrega</label>
			<input type="date" name="date" value="2020-04-13">
			<input type="time" name="time" value="23:59">
			<label for="file" class="d-block text-left">Archivo Opcional</label>
			<input type="file" name="file" enctype>
			<input type="submit" value="Crear" id="submit" class="btn btn-primary bg-yellow text-dark">

		</form>
	</div>
</main>
@endsection