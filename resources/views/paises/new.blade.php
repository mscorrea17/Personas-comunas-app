<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add País</title>
</head>
<body>
<div class="container">
    <h1>Add País</h1>
    <form method="POST" action="{{ route('paises.store') }}">
        @csrf
        <div class="mb-3">
            <label for="pais_codi" class="form-label">Código</label>
            <input type="text" class="form-control" id="pais_codi" name="pais_codi" required>
        </div>
        <div class="mb-3">
            <label for="pais_nomb" class="form-label">Nombre del País</label>
            <input type="text" class="form-control" id="pais_nomb" name="pais_nomb" required>
        </div>
        <div class="mb-3">
            <label for="pais_capi" class="form-label">Capital</label>
            <input type="text" class="form-control" id="pais_capi" name="pais_capi" required>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
