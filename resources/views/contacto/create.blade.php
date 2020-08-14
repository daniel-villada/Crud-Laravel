<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <title>Crear Contacto</title>
</head>
<body>
  <div class="jumbotron">
    <h1 class="display-4">Agenda - Crear contacto</h1>
  </div>
  <!-- Formulario -->
  <form action="{{ url('/contacto')}}" method="post">
    {{csrf_field()}}
    <!-- Nombre -->
    <div class="form-group">
      <label for="Nombre">{{'Nombre'}}</label>
      <input type="text" class="form-control col-sm-4" name="Nombre" id="Nombre"placeholder="Nombre Completo" value="">
    </div>

    <!-- Direccion -->
    <div class="form-group">
      <label for="Direccion">{{'Dirección'}}</label>
      <input type="text" class="form-control col-sm-4" name="Direccion" id="Direccion" placeholder="Dirección" value="">
    </div>

    <!-- Telefono -->
    <div class="form-group">
      <label for="Telefono">{{'Teléfono'}}</label>
      <input type="text" class="form-control col-sm-4"  name="Telefono" id="Telefono" placeholder="Teléfono" value="">
    </div>

    <!-- email -->
    <div class="form-group">
      <label for="Email">{{'Email'}}</label>
      <input type="email" class="form-control col-sm-4" name="Email" id="Email" placeholder="Email" value="">
    </div>

    <!-- Fecha de Nacimiento -->
    <div class="form-group">
      <label for="BirthDate">{{'F. Nacimiento'}}</label>
      <input type="date" class="form-control col-sm-4" name="BirthDate" id="BirthDate" value="">
    </div>
    <input class="btn btn-primary" type="submit" value="Agregar">
  </form>
</body>
</html>
