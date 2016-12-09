@extends('backend.main')
@section('contenido')

	<div class="container-fluid">
		<h2>Clientes</h2>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<a class="btn btn-large btn-block btn-primary" href="{{ route('backend.clientes.create') }}" role="button">Agregar</a>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				{!! Form::open(['route' => 'backend.clientes.index', 'method' => 'GET', 'class' => 'nav-form pull-right']) !!}
					<div class="input-group">
					{!! Form::text('nombre', null, ['class'=>'form-control', 'aria-describedby'=>'buscar' ,'placeholder'=>'Buscar cliente...'])!!}
					<span class="input-group-addon glyphicon glyphicon-search" aria-hidden="true" id="buscar"></span> 
				</div>

				{!! Form::close() !!}
			</div>

		<hr>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>RUT</th>						
						<th>Nombre</th>
						<th>email</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($clientes as $cliente)
					<tr>
						
							{{-- expr --}}
						<td>{{$cliente->rut}} - {{$cliente->cod_rut}}</td>							
						<td>{{$cliente->nombre}}</td>
						<td>{{$cliente->email}}</td>
						<td>
						<div class="form-group">

							<a data-toggle="modal" title="Editar" class="open-vista btn btn-info" href="#editar"
								data-cliente="{{$cliente}}"
								@if ($cliente->ciudad_id)
									data-ciudad="{{$cliente->ciudad->nombre}}"
								@else
									data-ciudad="Sin Especificar"
								@endif
								@if ($cliente->comuna_id)
									data-comuna="{{$cliente->comuna->nombre}}"
								@else
									data-comuna="Sin Especificar"
								@endif
								@if ($cliente->region_id)
									data-region="{{$cliente->region->nombre}}"
								@else
									data-region="Sin Especificar"
								@endif
								
							>Info</a>

							<a href="{{ route('backend.clientes.edit',$cliente->id) }}" class="btn btn-warning">Editar</a>

							<a href="{{ route('backend.clientes.destroy',$cliente->id) }}" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		
		<div class="modal fade" id="editar">
		  	<div class="modal-dialog">
			  	<div class="modal-content">
					<div class="modal-header">
					   <button class="close" data-dismiss="modal">×</button>
					   <h3>Información de la cliente</h3>
					</div>
				    <div class="modal-body" id="vista">
						
						Nombre: <span id='nombre'></span><br>
						Razón Social: <span id='razon'></span><br>
						Rut: <span id='rut'></span> - <span id='codrut'></span><br>
						Teléfono: <span id='telefono'></span><br>
						Dirección: <span id='direccion'></span><br>
						Email: <span id='email'></span><br>
						Ciudad: <span id='ciudad'></span><br>
						Comuna: <span id='comuna'></span><br>
						Región: <span id='region'></span>
				    </div>
				  	 <div class="modal-footer">
			          <button type="button" class="btn btn-default" id="cerrarModal" data-dismiss="modal">Cerrar</button>
			        </div>
				</div>
			</div>
		</div>
	</div>
{!!$clientes->render()!!}
@endsection
@section('js')
@include('backend.clientes.jscliente');
@endsection