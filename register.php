<?php

if (isset($_POST)) {
    // connect to db
    require_once 'assets/includes/connection.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;   // avoid hack database using special characters
    $surname = isset($_POST['surname']) ? mysqli_real_escape_string($db, $_POST['surname']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    // errores
    $errors = array();

    // validate the data before saving on db
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $validatedName = true;
    } else {
        $validatedName = false;
        $errors['name'] = "El nombre no es válido";
    }

    if (!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)) {
        $validatedSurname = true;
    } else {
        $validatedvalidatedSurnameName = false;
        $errors['surname'] = "El apellido no es válido";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validatedEmail = true;
    } else {
        $validatedEmail = false;
        $errors['email'] = "El email no es válido";
    }

    if (!empty($password)) {
        $validatedPassword = true;
    } else {
        $validatedPassword = false;
        $errors['password'] = "La contraseña no es válida";
    }

    $saveUser = false;
    if (count($errors) == 0) {
        $saveUser = true;

        // pass hash

        $savePassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        $sql = "INSERT INTO users VALUES(null, '$name', '$surname', '$email', '$savePassword', CURDATE())";

        try {
            mysqli_query($db, $sql);
            $_SESSION['completed'] = "El registro se ha completado con éxito";
        } catch (\Throwable $th) {
            $_SESSION['errors']['general'] = "Fallo al guardar el usuario";
        }
    } else {
        $_SESSION['errors'] = $errors;
    }
}

header('Location: index.php');
