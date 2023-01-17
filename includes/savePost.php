<?php

if (isset($_POST())) {
    require_once '../includes/connection.php';

    $title = isset($_POST['title']) ? mysqli_real_escape_string($db, $_POST['title']) : false;
    $description = isset($_POST['description']) ? mysqli_real_escape_string($db, $_POST['description']) : false;
}
