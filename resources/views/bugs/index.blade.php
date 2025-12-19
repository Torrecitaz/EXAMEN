<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelForge - Reporte de Errores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-primary">Errores Reportados - PixelForge</h2>
            <a href="{{ route('bugs.create') }}" class="btn btn-primary">Reportar Nuevo Bug</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive bg-white shadow-sm p-3 rounded">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Área</th>
                        <th>Gravedad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bugs as $bug)
                    <tr>
                        <td>{{ $bug->id }}</td>
                        <td><strong>{{ $bug->titulo }}</strong></td>
                        <td>{{ $bug->area }}</td>
                        <td>
                            <span class="badge {{ $bug->gravedad == 'Crítica' ? 'bg-danger' : ($bug->gravedad == 'Alta' ? 'bg-warning text-dark' : 'bg-info text-dark') }}">
                                {{ $bug->gravedad }}
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-secondary">{{ $bug->estado }}</span>
                        </td>
                        <td>
                            <a href="{{ route('bugs.edit', $bug->id) }}" class="btn btn-sm btn-outline-primary">Editar/Revisar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>