<?php

//Основные настройки БД
$server = "localhost";
$user = "root";
$password = "";
$dbname = "honey";


// Create connection
$link = new mysqli($server, $user, $password, $dbname);
$link->set_charset("utf8");

// Check connection
if (!$link) {
    die("Connection failed: " . $link->connect_error);
}




