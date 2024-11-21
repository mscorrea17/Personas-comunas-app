<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Municipio</title>
  </head>
  <body>
    <div class="container">
      <h1>Add Municipio</h1>
      <form method="POST" action="{{ route('municipios.store') }}">
        @csrf

        <div class="mb-3">
          <label for="muni_codi" class="form-label">Code</label>
          <input type="text" class="form-control" id="muni_codi" name="muni_codi" required>
        </div>

        <div class="mb-3">
          <label for="muni_nomb" class="form-label">Municipio</label>
          <input type="text" class="form-control" id="muni_nomb" name="muni_nomb" placeholder="Municipio name" required>
        </div>

        <label for="depa_codi">Department:</label>
        <select class="form-select" id="depa_codi" name="depa_codi" required>
          <option selected disabled value="">Choose one...</option>
          @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
          @endforeach
        </select>

        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>
  </body>
</html>
