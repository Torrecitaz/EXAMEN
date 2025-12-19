<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportar Bug - PixelForge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h4 class="mb-0">Registrar Nuevo Error</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('bugs.store') }}" method="POST">
                            @csrf 
                            <div class="mb-3">
                                <label class="form-label fw-bold">Título del Bug</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Ej: El personaje atraviesa paredes" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Área Afectada</label>
                                    <input type="text" name="area" class="form-control" placeholder="Ej: Nivel 2, Inventario" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Gravedad</label>
                                    <select name="gravedad" class="form-select" required>
                                        <option value="Baja">Baja</option>
                                        <option value="Media">Media</option>
                                        <option value="Alta">Alta</option>
                                        <option value="Crítica">Crítica</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Pasos para reproducir el error</label>
                                <textarea name="pasos" class="form-control" rows="4" placeholder="1. Abrir menú, 2. Presionar saltar..." required></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success btn-lg">Enviar Reporte</button>
                                <a href="{{ route('bugs.index') }}" class="btn btn-light">Cancelar y volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>