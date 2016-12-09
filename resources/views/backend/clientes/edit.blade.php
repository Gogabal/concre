@extends('backend.main')

@section('contenido')
<div class="container-fluid">
<h2>Editar Empresa {{ $empresa->nombre }}</h2>
<br>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">

	{!! Form::open(['route'=>['backend.empresas.update', $empresa], 'method'=>'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre de fantasía') !!}
			{!! Form::text('nombre', $empresa->nombre, ['class'=>'form-control', 'placeholder'=>'TuEmpresa' ,'required'] ) !!}
		</div>
		<div class="form-group">
			{!! Form::label('razon_social', 'Razón Social') !!}
			{!! Form::text('razon_social', $empresa->razon_social, ['class'=>'form-control', 'placeholder'=>'TuEmpresa LTDA' ,'required'] ) !!}
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<span class="form-inline">
				<div class="form-group">
					{!! Form::label('rut', 'RUT :') !!}
					{!! Form::text('rut', $empresa->rut, ['class'=>'form-control', 'placeholder'=>'ej: 76289459' ,'required', 'maxlength'=>'8'] ) !!}
					-
					{!! Form::text('cod_rut', $empresa->cod_rut, ['class'=>'form-control', 'placeholder'=>'5' ,'required', 'size'=>'1', 'maxlength'=>'1'] ) !!}
				</div>
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<span class="form-inline">
				<div class="form-group">
					{!! Form::label('telefono', 'Teléfono :') !!}
					{!! Form::text('telefono', $empresa->telefono, ['class'=>'form-control', 'placeholder'=>'ej: 612243884' ,'required'] ) !!}
				</div>
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<span class="form-inline">
				<div class="form-group">
					{!! Form::label('email', 'Email :') !!}
					{!! Form::text('email', $empresa->email, ['class'=>'form-control', 'placeholder'=>'ej: contacto@empresa.com' ,'required', 'size'=>'33'] ) !!}
				</div>
				</span>
			</div>
		</div>
		<br>

		<div class="form-group">
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion', $empresa->direccion, ['class'=>'form-control', 'placeholder'=>'Pasaje 3' ,'required'] ) !!}
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('ciudad_id', 'Ciudad') !!}
					{!! Form::select('ciudad_id', $ciudadesList, $empresa->ciudad['id'], ['class'=>'form-control select-ciudad', 'required']) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('comuna_id', 'Comuna') !!}
					{!! Form::select('comuna_id', $comunasList, $empresa->comuna['id'], ['class'=>'form-control select-comuna', 'required']) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('region_id', 'Region') !!}
					{!! Form::select('region_id', $regionesList, $empresa->region['id'], ['class'=>'form-control select-region', 'required']) !!}
				</div>
			</div>
			
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Empresa', ['class'=>'btn btn-primary']) !!}
		</div>

	{!!Form::close()!!}

</div>
</div>

	@endsection

	@section('js')
		<script type="text/javascript">
			$(".select-region").chosen({
				no_results_text: "No se encuentra la region",
				placeholder_text_single: "Seleccione una region"
			});

			$(".select-comuna").chosen({
				no_results_text: "No se encuentra la comuna",
				placeholder_text_single: "Seleccione una comuna"

			});
			$(".select-ciudad").chosen({
				no_results_text: "No se encuentran la ciudad",
				placeholder_text_single: "Seleccione una ciudad"
			});
		</script>
	@endsection