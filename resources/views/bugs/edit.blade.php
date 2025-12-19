<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Bug - PixelForge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0">
                    <div class="card-header bg-warning text-dark py-3">
                        <h4 class="mb-0">Actualizar Estado de Bug</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('bugs.update', $bug->id) }}" method="POST">
                            @csrf
                            @method('PUT') <div class="mb-3">
                                <label class="form-label fw-bold">Título</label>
                                <input type="text" name="titulo" class="form-control" value="{{ $bug->titulo }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Estado Actual</label>
                                <select name="estado" class="form-select">
                                    <option value="Nuevo" {{ $bug->estado == 'Nuevo' ? 'selected' : '' }}>Nuevo</option>
                                    <option value="En revisión" {{ $bug->estado == 'En revisión' ? 'selected' : '' }}>En revisión</option>
                                    <option value="Arreglado" {{ $bug->estado == 'Arreglado' ? 'selected' : '' }}>Arreglado</option>
                                    <option value="Rechazado" {{ $bug->estado == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning fw-bold">Guardar Cambios</button>
                                <a href="{{ route('bugs.index') }}" class="btn btn-light">Volver al listado</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>