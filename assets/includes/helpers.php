<?php

function showError($errors, $field)
{
    $alert = '';
    if (isset($errors[$field]) && !empty($field)) {
        $alert = "<div class='alert alert-error'>" . $errors[$field] . '</div>';
    }

    return $alert;
}


function deleteErrors()
{
    $deleted = false;

    if (isset($_SESSION['errors'])) {
        $_SESSION['errors'] = null;
        unset($_SESSION['errors']);
        $deleted = true;
    }

    if (isset($_SESSION['completed'])) {
        $_SESSION['completed'] = null;
        unset($_SESSION['completed']);
        $deleted = true;
    }

    return $deleted;
}

function getCathegories($connection) {
    $sql = "SELECT * FROM cathegories ORDER BY id ASC";
    $cathegories = mysqli_query($connection, $sql);

    $result = array();
    if ($cathegories && mysqli_num_rows($cathegories) >= 1) {
        $result = $cathegories;
    }

    return $result;
}
