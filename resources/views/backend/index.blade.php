@extends('backend.main')
@section('contenido')
<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2 class="text-center">Ventas Concresur</h2>
	</div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Ultimas Empresas Agregadas</h3>
			</div>
			<div class="panel-body">
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Rut</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody id="ultimasempresas">
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Ultimos Trabajadores Agregados</h3>
			</div>
			<div class="panel-body">
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Cargo</th>
						</tr>
					</thead>
						<tbody id="ultimostrabajadores">
						</tbody>
				</table>
			</div>
		</div>	
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Ultimas Faenas Agregadas</h3>
			</div>
			<div class="panel-body">
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Empresa</th>
							<th>Direccion</th>
							<th>Ciudad</th>
						</tr>
					</thead>
					<tbody id="ultimasfaenas">
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Ultimos Usuarios de Sistema Agregados</h3>
			</div>
			<div class="panel-body">
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Email</th>
							<th>Tipo</th>
						</tr>
					</thead>
					<tbody id="ultimosusuarios">
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection
@section('js')
@include('backend.jsindex')
@endsection