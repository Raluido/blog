<?php

require_once 'testeando.php';

$person = new Person();

$person->setName("Raúl");

var_dump($person);

$developer = new Developer();

$developer->setName("tonito");

var_dump($developer);

$designer = new Designer();

$designer->setName("Manolo");

var_dump($designer);

?>