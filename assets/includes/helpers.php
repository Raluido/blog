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
        $deleted = session_unset($_SESSION['errors']);
    }

    if (isset($_SESSION['completed'])) {
        $_SESSION['completed'] = null;
        $deleted = session_unset($_SESSION['completed']);
    }

    return $deleted;
}
