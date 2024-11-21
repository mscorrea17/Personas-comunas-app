<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Municipios</title>
  </head>

  <body>
  <div class="container">
    <h1>Municipio List</h1>
    <a href="{{ route('municipios.create') }}" class="btn btn-success">Add</a> 
    <table class="table">
    <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Municipio</th>
      <th scope="col">Department</th>
      <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($municipios as $municipio)
    <tr>
      <th scope="row">{{ $municipio->muni_codi }}</th>
      <td>{{ $municipio->muni_nomb }}</td>
      <td>{{ $municipio->depa_nomb }}</td>
      <td>
     <a href="{{ route('municipios.edit', $municipio->muni_codi) }}" class="btn btn-info"> Edit </a> 
     
      <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi]) }}" method="POST" style="display: inline-block">
      @method('delete')
      @csrf
      <input class="btn btn-danger" type="submit" value="Delete">
      </form>
    </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
