@extends('layouts.app')

@section('content')
<main class="container main-crear-curso text-md-center">
	<!-- Title -->
	<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Sube tu archivo</h1>
	<img class="subir-archivo_img" src="img/ToyFace14.png" alt="">
	<div class="mt-md-4 mt-4">
		<form class="mx-md-auto" action="{{route('entregas.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="file" enctype required>
		    <input type="text" class="d-none" name="tarea_id" value="{{ $tarea->id }}">
			<input type="submit"  id="submit" class="btn btn-primary bg-yellow text-dark">
		</form>
	</div>
</main>
@endsection