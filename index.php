<?php

include 'ajax/connect_db.php';

function getComments(){
    global $link;
    $query = "SELECT * FROM comments";
    $res = mysqli_query($link, $query);
    return $res;
}

$comments = getComments();

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">

    <META NAME="KEYWORDS" CONTENT="">
    <META NAME="DESCRIPTION" CONTENT="">
    <META NAME="COPYRIGHT" CONTENT="">


    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

	<title>Honey hunters - test</title>
</head>
<body>
    <?php
        while($row=mysqli_fetch_array($comments))
        {
            echo "<h3>".$row['name']."</h3>";
        }
    ?>
</body>
</html>