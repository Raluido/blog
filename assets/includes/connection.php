<?php

// connection

$server = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'blog';
$db = mysqli_connect($server, $user, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");


session_start();
