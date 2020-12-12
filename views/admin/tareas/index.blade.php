@extends('layouts.admin')
@section('content')
<main class="container">
	<!-- Titulo -->
	<div class="home-title row">
		<div class="home-title_text pl-3 mr-5">
			<h1 class="mt-4 mt-sm-5 text-purple ">Tareas</h1>
			<a href="{{route('admintareas.create')}}">Agregar tarea</a>
		</div>
	</div>
	<hr>
	<div class="cursos-index cursoadmin-index mt-4">
		<div class="row row-cols-1 row-cols-lg-2 ">

			@foreach($tareas as $tarea)
			<div class="col mb-4">
				<div class="card h-100 bg-yellow p-3 p-xl-4">
					<div class="home-cursos_titulo">
						<h2 class="card-title pt-1 pl-2">{{$tarea->title}}</h2>
						<h3 class="pl-2">{{$tarea->date}} a las {{$tarea->time}}</h3>
					</div>
					<hr>
					<p class="card-text">{{$tarea->description}}</p>
					<a class="card-text pb-3" target="_blank" href="{{asset("tarea/$tarea->file")}}">{{$tarea->file}}</a>
					<div class="cursoadmin-index_botones d-flex">
						<a class="bg-lpurple mr-md-3" href="{{route('admintareas.show', $tarea->id)}}">Ver</a>
						<a class="bg-lpurple mr-md-3" href="{{route('admintareas.edit', $tarea->id)}}">Editar</a>
						<form>
						<input type="submit" class="eliminar bg-danger mr-md-3" href="" value="Eliminar">
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</main>
@endsection
