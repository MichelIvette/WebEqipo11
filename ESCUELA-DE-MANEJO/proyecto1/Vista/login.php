<!-- app/vista/login.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4">Iniciar Sesión</h3>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="clave" class="form-label">Clave</label>
            <input type="password" class="form-control" id="clave" name="clave" required>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
            <label class="form-check-label" for="recordarme">Recuérdame</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
    </form>
</div>

</body>
</html>
