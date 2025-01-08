<?php
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $conn = getDatabaseConnection();

    // Consulta para verificar el usuario
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Iniciar sesión
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header('Location: ../views/dashboard.php');
        exit;
    } else {
        // Redirigir con error
        header('Location: ../views/auth/login.php?error=invalid_credentials');
        exit;
    }
}
