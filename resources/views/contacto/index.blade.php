<!DOCTYPE html>
<html>
<head>
  <title>Agenda</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
  <div class="jumbotron">
    <h1 class="display-4">Agenda</h1>
  </div>
<!-- Formulario View -->
  <div class="container">
    <div class="formulario">
      <form action="contacto" method="get">
        <!-- Campo de Buscar -->
        <div class="form-group">
          <div class="input-group">
            <input type="text"  class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}"><span class="input-group-btn"><button type="submit" class="btn btn-primary">Buscar</button></span>
          </div>
        </div>
      </form>
    </div>
    <a href="contacto/create"><button class="btn btn-success">Crear</button></a>
  </div>
  <br>
  <table class="table">
    <thead>
      <th scope="col" style="text-align: center;">ID</th>
      <th scope="col" style="text-align: center;">NOMBRE</th>
      <th scope="col" style="text-align: center;">DIRECCIÓN</th>
      <th scope="col" style="text-align: center;">TELÉFONO</th>
      <th scope="col" style="text-align: center;">EMAIL</th>
      <th scope="col" style="text-align: center;">F. NACIMIENTO</th>
      <th scope="row" style="text-align: center;">OPCIONES</th>
    </thead>
    <tbody>
      @foreach($contacto as $cont)
        <tr>
          <td scope="row"style="text-align: center;">{{$cont->id}}</td>
          <td scope="row"style="text-align: center;">{{$cont->nombre_apellido}}</td>
          <td scope="row"style="text-align: center;">{{$cont->direccion}}</td>
          <td scope="row"style="text-align: center;">{{$cont->telefono}}</td>
          <td scope="row"style="text-align: center;">{{$cont->email}}</td>
          <td scope="row"style="text-align: center;">{{$cont->nacimiento}}</td>
          <td scope="row"style="text-align: center;">
            <a class="btn btn-warning" href="{{url('/contacto/'.$cont->id.'/edit')}}" role="button">Editar</a>
            <!-- Corregir eliminar -->
            <!-- <form action="{{url('/contacto/'.$cont->id)}}" method="POST">
                {{( csrf_field() )}}
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>
                </form> -->
            <a class="btn btn-info" href="{{URL::action('ContactoController@show',$cont->id)}}" role="button">Detalles</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <span class="pagination">{{$contacto->render()}}</span>
</body>
</html>

<style>

  .container{
    width: 50%;
    margin: 0 auto;
  }
  .formulario {
      width:80%;
      display: inline-block;
  }


  .btn-primary{
    margin-left: 5px;
  }

  .btn-success{
    margin-bottom: 5px;
    display: inline-block;
  }  

  .table{
      width: 80%;
      margin: 0 auto;
      text-align:center;
  }

  .pagination{
    width: 10%;
    margin: 0 auto;
    margin-top: 0px;
  }
</style>