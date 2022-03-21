@extends('layouts.app-prueba')
@section('content')
<div class="container">
     <h2 class="h1">
         {{$title.' '.$carrera->nombre.' ('.$carrera->sede->nombre.' - Turno '.ucwords($carrera->turno).')' }} 
    </h2>
    <hr>
    @if(count($preinscripciones) == 0)
			<p>No hay preinscripciones para esta carrera.</p>
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
		@endif
    
</div>
    
@endsection