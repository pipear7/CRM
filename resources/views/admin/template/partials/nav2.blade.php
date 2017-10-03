<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-targed="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img style="width: 44px; padding: -15px" src="http://files.wikilenguamovera.webnode.es/200000040-5a9e45b982/articulo.png">
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>
    <ul class="nav navbar-nav">
      <li><a href="#">Inicio</a></li>
      <li><a href="{{ route('users.index') }}">Usuarios</a></li>
      <li><a href="#">Categorias</a></li>
      <li><a href="#">Articulos</a></li>
      <li><a href="#">Imagenes</a></li>
      <li><a href="#">Tags</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Página Principal</a></li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Salir</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
    </ul>
  </div>
</nav>

</body>
</html>