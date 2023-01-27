<?php require_once 'connection.php'; ?>
<?php require_once 'helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Blog</title>
</head>

<body>
    <header>
        <div class="">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            <a href="../index.php">
                                <h1>NadadeNada</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="">
            <ul>
                <li><a href="/index.php">Inicio</a></li>
                <?php $cathegories = getCathegories($db);
                if (!empty($cathegories)) :
                    while ($cathegory = mysqli_fetch_assoc($cathegories)) :
                ?>
                        <li>
                            <a href="postsByCathegory.php?id=<?= $cathegory['id'] ?>"><?= $cathegory['name'] ?></a>
                        </li>
                <?php
                    endwhile;
                endif;
                ?>
                <li><a href="/index.php">Sobre nosotros</a></li>
                <li><a href="/index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>