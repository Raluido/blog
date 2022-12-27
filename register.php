<?php
session_start();
if (isset($_POST)) {
    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    // errores
    $errors = array();

    // validate the data before save on db
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
    } else {
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
    }
}
