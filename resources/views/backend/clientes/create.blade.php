@extends('backend.main')

@section('contenido')
<div class="container-fluid">
<h2>Agregar Empresa</h2>
<br>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">

	{!! Form::open(['route'=>'backend.empresas.store', 'method'=>'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre de fantasía') !!}
			{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'TuEmpresa' ,'required'] ) !!}
		</div>
		<div class="form-group">
			{!! Form::label('razon_social', 'Razón Social') !!}
			{!! Form::text('razon_social', null, ['class'=>'form-control', 'placeholder'=>'TuEmpresa LTDA' ,'required'] ) !!}
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
								
					<span class="form-inline">

					{!! Form::label('rut', 'RUT :') !!}
					{!! Form::text('rut', null, ['class'=>'form-control', 'placeholder'=>'ej: 76289459' ,'required', 'maxlength'=>'8'] ) !!}
					-
					{!! Form::text('cod_rut', null, ['class'=>'form-control', 'placeholder'=>'5' ,'required', 'size'=>'1', 'maxlength'=>'1'] ) !!}
					</span>

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('telefono', 'Teléfono :') !!}
					{!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'ej: 612243884' ,'required'] ) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('email', 'Email :') !!}
					{!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'ej: contacto@empresa.com' ,'required', 'size'=>'33'] ) !!}
				</div>
			</div>
		</div>
		<br>

		<div class="form-group">
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Pasaje 3' ,'required'] ) !!}
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('ciudad_id', 'Ciudad') !!}
					{!! Form::select('ciudad_id', $ciudadesList, null, ['class'=>'form-control select-ciudad', 'required']) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('comuna_id', 'Comuna') !!}
					{!! Form::select('comuna_id', $comunasList, null, ['class'=>'form-control select-comuna', 'required']) !!}
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="form-group">
					{!! Form::label('region_id', 'Region') !!}
					{!! Form::select('region_id', $regionesList, null, ['class'=>'form-control select-region', 'required']) !!}
				</div>
			</div>
			
		</div>

		<div class="form-group">
			{!! Form::submit('Agregar Empresa', ['class'=>'btn btn-primary']) !!}
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