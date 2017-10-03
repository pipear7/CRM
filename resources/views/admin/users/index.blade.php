@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h2 class="panel-title" >Lista de Usuarios</h2>
	  </div><br>
	  <div class="panel-body">
	    <a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a><br><br>
	
	<div class="container" style="width:100%; height:auto;">
		<div class="row banda-espacio-3">
		
			<div class="divTable blueTable" style="overflow-x:auto;">
				<div class="divTableHeading">
					<div class="divTableRow">
						<div class="divTableHead">Id</div>
						<div class="divTableHead">Nombre</div>
						<div class="divTableHead">Correo</div>
						<div class="divTableHead">Tipo</div>
						<div class="divTableHead">Acción</div>
					</div>
				</div>
				<div class="divTableBody">
					@foreach($users as $user)
					<div class="divTableRow">
						<div class="divTableCell">{{ $user->id }}</div>
						<div class="divTableCell">{{ $user->name }}</div>
						<div class="divTableCell">{{ $user->email }}</div>
						<div class="divTableCell">@if($user->type == "admin")
							<span class="label label-danger">{{ $user->type }}</span>
							@else
							<span class="label label-primary">{{ $user->type }}</span>
							@endif
						</div>
						<div class="divTableCell"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></div>
					</div>
					@endforeach
				</div>
			</div>
			<div align="center">{!! $users->render() !!}</div>
			<div class="blueTable outerTableFooter">
				<div class="tableFootStyle">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				</div>
			</div>
   			</div>
		</div>  
	</div>
	  </div>
	</div>
	
@endsection