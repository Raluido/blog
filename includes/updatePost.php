<?php
require_once '../includes/connection.php';
if ($_SESSION['user'] && $_GET['cathegoryId'] && $_GET['title'] && $_GET['description']) {
    $cathegoryId = $_GET['cathegoryId'];
    $title = $_GET['title'];
    $description = $_GET['description'];
    $query = "UPDATE posts SET cathegory_id = '', title = '', " .
        "description = '', date = CURDATE() WHERE user_id = $userId AND id = $postId";
    mysqli_query($db, $query);
}