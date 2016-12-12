@extends('backend.main')
@section('contenido')

	<div class="container-fluid">
		<h2>Regiones</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<a class="btn btn-large btn-block btn-primary" href="#" data-toggle="modal" data-target="#myModal" role="button">Agregar</a>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			{!! Form::open(['route' => 'backend.regiones.index', 'method' => 'GET', 'class' => 'nav-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('nombre', null, ['class'=>'form-control', 'aria-describedby'=>'buscar' ,'placeholder'=>'Buscar Región...'])!!}
				<span class="input-group-addon glyphicon glyphicon-search" aria-hidden="true" id="buscar"></span> 
			</div>
			{!! Form::close() !!}
			</div>

		</div>
		<hr>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2">
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th><a href="#" id="thnombre" onclick="orderByNombre()">Nombre</a></th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody id="regiones-list" name="regiones-list">
				@foreach ($regiones as $region)
					<tr>
						
							{{-- expr --}}
						<td>{{$region->nombre}}</td>
						<td>
						<div class="form-group">
							<a data-toggle="modal" data-link="{{route('backend.regiones.update',$region->id)}}" data-nombre="{{$region->nombre}}" data-idregion="{{$region->id}}" title="Editar" class="open-edit btn btn-warning" href="#editar">Editar</a>

							<a href="{{ route('backend.regiones.destroy',$region->id) }}" class="btn btn-danger">Eliminar</a>
						
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>

		<!--- Modal's -->
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->

		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Region</h4>
		        </div>

		        <div class="modal-body">
		        	{!!Form::open(['route'=>'backend.regiones.store','method'=>'POST'])!!}

		        		<div class="form-group"> 
		        		{!!Form::label('nombre','Nombre')!!}
		        		{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ej: Magallanes'])!!}
		        		</div>

		        		<hr>
		        		{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}

		        	{!!Form::close()!!}
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        </div>
		      </div>
		    </div>
	  	</div>


	  	<div class="modal fade" id="editar">
	  	<div class="modal-dialog">
		  	<div class="modal-content">
				<div class="modal-header">
				   <button class="close" data-dismiss="modal">×</button>
				   <h3>Editar Region</h3>
				</div>
			    <div class="modal-body" id="edit">
			    {!!Form::open(['route'=>'backend.regiones.update','method'=>'PUT','id'=>'updateForm'])!!}
			    	<div class="form-group">
			    	{!!Form::label('nombre','Nombre')!!}
			        <input type="text" class="form-control" name="nombre" id="nombre" value=""/>
			       	</div>
			    <hr>
			    {!!Form::submit('Editar',['class'=>'btn btn-warning'])!!}
			    {!!Form::close()!!}
			    </div>
			  	 <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        </div>
			</div>
		</div>
		</div>

		<!--- EndModal's -->

@endsection
@section('js')
@include('backend.variables.regiones.jsregion');
@endsection
