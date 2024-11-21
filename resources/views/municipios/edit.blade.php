<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Municipio</title>
</head>
<body>
    <div class="container">
        <h1>Edit Municipio</h1>
        <form method="POST" action="{{ route('municipios.update', ['municipio' => $municipio->muni_codi]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" name="id" disabled="disabled" value="{{ $municipio->muni_codi }}">
                <div class="form-text">Municipio Id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Municipio</label>
                <input type="text" class="form-control" id="name" name="muni_nomb" value="{{ $municipio->muni_nomb }}">
            </div>
            <label for="department">Department:</label>
            <select class="form-select" id="department" name="depa_codi" required>
                <option selected disabled value="">Choose one...</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->depa_codi }}" {{ $departamento->depa_codi == $municipio->depa_codi ? 'selected' : '' }}>
                        {{ $departamento->depa_nomb }}
                    </option>
                @endforeach
            </select>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>

