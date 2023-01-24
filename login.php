<?php

// for testing show errors 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once 'includes/connection.php';

if (!isset($_SESSION)) {
    session_start();
}

$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

if (!empty($email) || !empty($password)) {
    $query = "SELECT * FROM users WHERE email = '$email'";

    try {
        $sql = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($sql);
        if ($user == null) {
            $_SESSION['errors']['login'] = "El email no esta registrado";
        } else {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;

                if (isset($_SESSION['errors']['login'])) {
                    $_SESSION['errors']['login'] = null;
                }
            } else {
                $_SESSION['errors']['login'] = "La contraseña es incorrecta";
            }
        }
    } catch (\Throwable $th) {
        $_SESSION['errors']['login'] = "Ha habido un error, inténtelo de nuevo";
    }
} else {
    $_SESSION['errors']['login'] = "Debe rellenar ambos campos";
}

header('Location: index.php');
