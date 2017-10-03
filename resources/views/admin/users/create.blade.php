@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

	{!! Form::open(['route'=>'users.store','method' =>'POST']) !!} 

		<div class="panel panel-default">
		  <div class="panel-heading">
			Crear Usuario
		  </div>
		  <div class="panel-body">
			<div class="row banda-espacio-3">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						{!! Form::label('name','Nombre') !!}
						{!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre Completo','required']) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('email','Correo Electronico') !!}
						{!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required']) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('password','Contraseña') !!}
						{!! Form::password('password', ['class' => 'form-control','placeholder' => '*********','required']) !!}
					</div>		
					
					<div class="form-group">
						{!! Form::label('type','Tipo') !!}
						{{-- {!! Form::select('password', ['' => 'Seleccione un nivel...', 'member' => 'Miembro','admin' => 'Administrador'], null , ['class' => 'form-control']) !!} --}}
						{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['placeholder' => 'Selecciona Nivel...', 'class' => 'form-control']) !!}﻿
					</div>
					<div class="form-group">
						{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
					</div>
				</div>
			</div>
		  </div>
		</div>

		
	
	{!! Form::close() !!} 
@endsection



