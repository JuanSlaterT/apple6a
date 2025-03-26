<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Sexos</title>
    <link rel="stylesheet" href="/css/index.style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="container">
    <header class="header">
        <h1>Listado de los Sexos</h1>
        <a href="/apple6a/app/views/sexo/create.php" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Agregar Sexo
        </a>
    </header>

    <section class="table-section">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($sexos) && is_array($sexos)): ?>
                    <?php foreach ($sexos as $sexo): ?>
                        <tr>
                            <td><?= htmlspecialchars($sexo['id']) ?></td>
                            <td><?= htmlspecialchars($sexo['nombre']) ?></td>
                            <td class="action-buttons">
                                <a href="/apple6a/public/sexo/edit?id=<?= htmlspecialchars($sexo['id']) ?>" class="btn btn-edit">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="/apple6a/public/sexo/eliminar?id=<?= htmlspecialchars($sexo['id']) ?>"
                                   class="btn btn-delete"
                                   onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="no-records">No hay registros disponibles.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</div>

<script src="/apple6a/public/js/script.js"></script>
<script>
    console.log("Path actual:", window.location.pathname);
</script>
</body>
</html>
