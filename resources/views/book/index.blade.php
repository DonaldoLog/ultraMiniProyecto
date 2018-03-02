<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table">
        <thead>
          <tr>
            <td>Nombre</td><td>Autor</td>
          </tr>
        </thead>
                  <tbody>


@foreach ($libros as $libro)
  <tr>
    <td>{{$libro->nombre}}</td>
      <td>{{$libro->autor}}</td>
  </tr>
@endforeach
        </tbody>
    </table>

  </body>
</html>
