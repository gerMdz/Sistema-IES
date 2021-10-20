@extends('layouts.app')
@section('content')
	<div class="container">
		<h2 class="h1">
			Preinscripciones: Elegir la carrera
		</h2>
		<hr>
		
		<div class="row">
		    <a href="{{route('pre.excelv')}}" class="btn btn-success">
			    Descargar verificadas
		    </a>
		    <a href="{{route('pre.articulo')}}" class="ml-2 btn btn-secondary">Articulo 7mo</a>
		
		    <form method="GET" action="#" id="buscador" class="col-md-8 d-flex">
				<div class="">
					<input type="text" id="busqueda" class="ml-3 form-control" placeholder="Buscar alumno">
				</div>
		    </form>
		</div>
	
		@if(!empty($carreras))
		<table class="table mt-4">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Nombre</th>
		      <th scope="col">Turno</th>
		      <th scope="col">Ubicación</th>
		      <th scope="col">Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($carreras as $carrera)
		    <tr style="cursor:pointer;">
		      <td>{{ $carrera->nombre }}</td>
		      <td><b>{{ ucwords($carrera->turno) }}<b></td>
		      <td>{{ $carrera->sede->nombre }}</td>
		      <td>
		      	<a href="{{ route('pre.all',['id'=>$carrera->id]) }}" class="btn-sm btn-primary">
		      		Ver respuestas
		      	</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		@else
	    
		<table class="table mt-4">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Nombre y Apellido</th>
		      <th scope="col">D.N.I</th>
		      <th scope="col">Email</th>
		      <th scope="col">Telefono</th>
		      <th scope="col">Estado</th>
		      <th scope="col">Acción</th>
		    </tr>
		  </thead>
		  
		  <tbody>
		  
		  	@foreach ($preinscripciones as $preinscripcion)
		    <tr style="cursor:pointer;">
		      <td>{{ $preinscripcion->nombres.' '.$preinscripcion->apellidos }}</td>
		      <td>{{ $preinscripcion->dni }}</td>
		      <td>{{ $preinscripcion->email }}</td>
		      <td>{{ $preinscripcion->telefono }}</td>
		      <td class="{{$preinscripcion->estado == 'por corregir' ? 'text-danger': 'text-success'}}">{{ ucwords($preinscripcion->estado) }}</td>
		      <td>
		      	<a href="{{ route('pre.detalle',['id'=>$preinscripcion->id]) }}" class="btn-sm btn-primary">
		      		Ver datos
		      	</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		@if(count($preinscripciones) == 0)
		        <p>No existen coincidencias</p>
            @endif
		@endif
	</div>
@endsection