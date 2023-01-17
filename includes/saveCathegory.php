<?php

if (isset($_POST)) {
    require_once '../includes/connection.php';

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;

    $errors = array();

    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $validated = true;
    } else {
        $validated = false;
        $errors['name'] = "El nombre no es válido";
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO cathegories VALUES(NULL, '$name');";
        $save = mysqli_query($db, $sql);
    }
}

header("Location: ../index.php");
