<?php

if (isset($_POST)) {
    require_once 'includes/connection.php';

    $title = isset($_POST['title']) ? mysqli_real_escape_string($db, $_POST['title']) : false;
    $description = isset($_POST['description']) ? mysqli_real_escape_string($db, $_POST['description']) : false;

    $errors = array();

    if (!empty($title)) {
        $validated = true;
    } else {
        $validated = false;
        $errors['title'] = "El formato de el título es inválido";
    }

    if (!empty($description)) {
        $validated = true;
    } else {
        $validated = false;
        $errors['description'] = "El formato de la descripción es inválido";
    }

    $user_id = $_SESSION['user']['id'];
    $cathegory = $_POST['cathegory'];

    if (count($errors) == 0) {
        $sql = "INSERT INTO posts VALUES(NULL, '$user_id', '$cathegory', '$title', '$description', CURDATE());";
        $save = mysqli_query($db, $sql);
        $_SESSION['sended'] = "El post se ha subido correctamente";
        header("Location: ../index.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: ./newPost.php");
    }
}
