<?php
if (isset($_POST)) {
    require_once "../includes/connection.php";

    $name = isset($_POST['name']) ? mysqli_escape_string($db, $_POST['name']) : false;
    $surname = isset($_POST['surname']) ? mysqli_escape_string($db, $_POST['surname']) : false;
    $email = isset($_POST['email']) ? mysqli_escape_string($db, $_POST['email']) : false;
    $password = isset($_POST['password']) ? mysqli_escape_string($db, $_POST['password']) : false;
    $password2 = isset($_POST['password2']) ? mysqli_escape_string($db, $_POST['password2']) : false;

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

        $user_id = $_SESSION['user']['id'];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $sql = mysqli_query($db, $query);
        $emailCheck = mysqli_fetch_assoc($sql);

        if ($emailCheck && $user_id != $emailCheck['id']) {
            $errors['email'] = "Ese email ya está en nuestra base de datos";
        }
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

    if (!empty($password2)) {
        $validatedPassword2 = true;
    } else {
        $validatedPassword2 = false;
        $errors['password2'] = "La contraseña no es válida";
    }

    if ($password == $password2) {
        $validatedPassword3 = true;
    } else {
        $validatedPassword3 = false;
        $errors['doblepassword'] = "Las contraseñas no coinciden";
    }


    $saveUser = false;
    if (count($errors) == 0) {
        $saveUser = true;

        // pass hash

        $savePassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        $sql = "UPDATE users SET name = '$name', surname = '$surname', email = '$email', password = '$savePassword', date = CURDATE() WHERE id = $user_id;";

        try {
            mysqli_query($db, $sql);
            $_SESSION['completed'] = "Se han actualizado los datos";
            $_SESSION['user']['name'] = $name;
            $_SESSION['user']['surname'] = $surname;
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['password'] = $savePassword;
        } catch (\Throwable $th) {
            $_SESSION['errors']['general'] = "Fallo al actualizar el usuario";
            $_SESSION['errors'] = $errors;
        }
    } else {
        $_SESSION['errors'] = $errors;
    }
}

header("Location: userData.php");
