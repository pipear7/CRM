@extends('admin.template.main')

@section('title','Editar Usuario ' . $user->name)

@section('content')

	{{-- {!! Form::open(['route'=>'users.update','method' =>'PUT']) !!}  --}}
	{!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}﻿

		<div class="panel panel-default">
		  <div class="panel-heading">
			Editar Usuario {!!$user->name !!}
		  </div>
		  <div class="panel-body">
			<div class="row banda-espacio-3">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						{!! Form::label('name','Nombre') !!}
						{!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre Completo','required']) !!}
					</div>	
					<div class="form-group">
						{!! Form::label('email','Correo Electronico') !!}
						{!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required']) !!}
					</div>			
					<div class="form-group">
						{!! Form::label('type','Tipo') !!}
						{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, [ 'class' => 'form-control']) !!}﻿
					</div>
					<div class="form-group">
						{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
					</div>
				</div>
			</div>
		  </div>
		</div>

		
	
	{!! Form::close() !!} 
@endsection



