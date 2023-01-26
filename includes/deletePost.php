<?php
require_once '../includes/connection.php';
$userId = $_SESSION['user']['id'];
$postId = $_GET['id'];
if (isset($_SESSION['user']) && $_GET['id']) {
    $query = "DELETE FROM posts WHERE user_id = $userId AND id = $postId";
    mysqli_query($db, $query);
}

header('Location: ../index.php');
