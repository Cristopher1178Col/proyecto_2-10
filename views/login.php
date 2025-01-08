<link rel="stylesheet" href="public/css/style.css">
<div class="container">
    <h2 class="text-center mt-4">Inicio de sesión</h2>
    <div class="login-form">
        <form action="tu_archivo_de_autenticacion.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" name="action" value="login" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>
