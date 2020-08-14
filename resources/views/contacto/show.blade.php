<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <title>Editar Contacto</title>
</head>
<body>
  <div class="jumbotron">
    <h1 class="display-4">Agenda - Mostrar contacto</h1>
  </div>
  <!-- Formulario -->
  <form method="post" action="{{ url('/contacto/'.$contacto->id) }}">
    {{csrf_field()}}
    {{ method_field('PATCH') }}
    <!-- Nombre -->
    <div class="form-group">
      <label for="Nombre">{{'Nombre'}}</label>
      <input type="text" class="form-control col-sm-4" name="Nombre" id="Nombre"placeholder="Nombre Completo" value="{{$contacto->nombre_apellido}}" disabled>
    </div>

    <!-- Direccion -->
    <div class="form-group">
      <label for="Direccion">{{'Direccion'}}</label>
      <input type="text" class="form-control col-sm-4" name="Direccion" id="Direccion" placeholder="Dirección" value="{{$contacto->direccion}}" disabled>
    </div>

    <!-- Telefono -->
    <div class="form-group">
      <label for="Telefono">{{'Telefono'}}</label>
      <input type="text" class="form-control col-sm-4"  name="Telefono" id="Telefono" placeholder="Teléfono" value="{{$contacto->telefono}}" disabled>
    </div>

    <!-- email -->
    <div class="form-group">
      <label for="Email">{{'Email'}}</label>
      <input type="email" class="form-control col-sm-4" name="Email" id="Email" placeholder="Email" value="{{$contacto->email}}" disabled>
    </div>

    <!-- Fecha de Nacimiento -->
    <div class="form-group">
      <label for="BirthDate">{{'F.Nacimiento'}}</label>
      <input type="date" class="form-control col-sm-4" name="BirthDate" id="BirthDate" value="{{$contacto->nacimiento}}" disabled>
    </div>
    <!-- <input class="btn btn-primary" type="submit" value="Actualizar"> -->
    <a href="../contacto" class="btn btn-danger">Regresar</a>
  </form>