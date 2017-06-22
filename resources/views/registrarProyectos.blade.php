@extends('master')

@section('contenido')
<form action="">
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required>
	</div>
	<div class="form-group">
		<label for="fecha_inicio">Fecha de inicio:</label>
		<input type="date" class="form-control" name="fecha_inicio" required>
	</div>
	<div class="form-group">
		<label for="fecha_entrega">Fecha de entrega:</label>
		<input type="date" class="form-control" name="fecha_entrega" required>
	</div>
	<div class="form-group">
	<label for="encargado">Encargado:</label>
		<select name="encargado" class="form-control">
			@foreach($encargados as $a)
				<option value="{{$a->id}}">{{$a->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
	<label for="estado">Estado:</label>
		<select name="estado" class="form-control">
			<option value="0">Pendiente</option>
			<option value="1" selected="">En proceso</option>
			<option value="2">Finalizado</option>
			<option value="3">Cancelado</option>
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop
















