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

    if (isset($_SESSION['sended'])) {
        $_SESSION['sended'] = null;
        unset($_SESSION['sended']);
        $deleted = true;
    }

    return $deleted;
}

function getCathegories($connection)
{
    $sql = "SELECT * FROM cathegories ORDER BY id ASC";
    $cathegories = mysqli_query($connection, $sql);

    $result = array();
    if ($cathegories && mysqli_num_rows($cathegories) >= 1) {
        $result = $cathegories;
    }

    return $result;
}

function getLastPosts($connection)
{
    $sql = "SELECT p.*, c.* FROM posts p INNER JOIN cathegories c ON p.cathegory_id = c.id ORDER BY p.id DESC LIMIT 3";
    $posts = mysqli_query($connection, $sql);

    $result = array();
    if ($posts && mysqli_num_rows($posts) >= 1) {
        $result = $posts;
    }

    return $result;
}

function getAllPosts($connection)
{
    $sql = "SELECT p.*, c.* FROM posts p INNER JOIN cathegories c ON p.cathegory_id = c.id ORDER BY p.id";
    $posts = mysqli_query($connection, $sql);

    $result = array();
    if ($posts && mysqli_num_rows($posts) >= 1) {
        $result = $posts;
    }

    return $result;
}

function getUserData($connection)
{
    $user_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM users WHERE users.id = $user_id;";
    $userDatas = mysqli_query($connection, $sql);

    $result = array();
    if ($userDatas && mysqli_num_rows($userDatas) >= 1) {
        $result = $userDatas;
    }

    return $result;
}
