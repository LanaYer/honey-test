<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connect_db.php";

$result = mysqli_query($link, "INSERT INTO `honey`.`comments` (`id`, `name`, `email`, `comment`) VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['comment']."')");

die($result);