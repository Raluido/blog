<?php
require_once 'includes/connection.php';
if ($_SESSION['user'] && $_GET['cathegory'] && $_GET['title'] && $_GET['description']) {
    $cathegoryId = $_GET['cathegory'];
    $title = $_GET['title'];
    $description = $_GET['description'];
    $userId = $_GET['userId'];
    $postId = $_GET['postId'];
    $query = "UPDATE posts SET cathegory_id = '$cathegoryId', title = '$title', " .
        "description = '$description', date = CURDATE() WHERE user_id = $userId AND id = $postId";
    mysqli_query($db, $query);
}

header("Location: post.php?id=$postId");
