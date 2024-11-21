<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Departamento</title>
  </head>
  <body>
    <div class="container">
      <h1>Add Departamento</h1>
      <form method="POST" action="{{ route('departamentos.store') }}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="depa_codi" required>
          <div id="idHelp" class="form-text">Department Code</div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Department</label>
          <input type="text" class="form-control" id="name" name="depa_nomb" placeholder="Department name" required>
        </div>

        <label for="country">Country:</label>
        <select class="form-select" id="country" name="pais_codi" required>
          <option select disabled value="">Choose one...</option>
          @foreach ($paises as $pais)
            <option value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
          @endforeach
        </select>

        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('departamentos.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>
  </body>
</html>
