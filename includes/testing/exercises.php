<?php


$db = mysqli_connect("localhost", "root", "", "test");

if (mysqli_connect_errno()) {
    echo "La conexion ha fallado con código " . mysqli_connect_errno();
} else {
    echo "Se ha realizado la conexion correctamente";
}

mysqli_query($db, "SET NAMES utf8");

$result = mysqli_query($db, "SELECT * FROM users");

$resultFix = mysqli_fetch_assoc($result);

var_dump($resultFix);
