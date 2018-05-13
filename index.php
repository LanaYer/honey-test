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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<title>Honey hunters - test</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="header-logo">
                    <a href="/"><img src="images/logo.png"></a>
                </div>
            </div>
        </div>
    </header>
    <section class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mail-image">
                        <img src="images/contact-Icon.png">
                    </div>
                </div>
                <div class="row comment-form">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label for="validationServer01">Имя <span>*</span></label>
                            <input type="text" class="form-control is-valid" id="formName" required>
                            <label for="validationServer01">E-Mail <span>*</span></label>
                            <input type="text" class="form-control is-valid" id="formEmail" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationServer01">Комментарий <span>*</span></label>
                            <textarea type="text" class="form-control is-valid" id="formText" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary" onclick='addComment()'>Записать</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comments">
        <div class="container">
        <h2 class="text-center">Выводим комментарии</h2>
        <?php
        $i = 0;
        while($row=mysqli_fetch_array($comments))
        {
            echo "<div class='col-md-4 text-center'>";
            if ($i%2 == 0){
                echo "<div class='comment'>";
            }
            else{
                echo "<div class='comment comment-two'>";
            }
            echo "<div class='comment-header'>".$row['name']."</div>";
            echo "<p class='comment-email'>".$row['email']."</p>";
            echo "<p  class='comment-text'>".$row['comment']."</p>";
            echo "</div>";
            echo "</div>";

            $i++;
        }
        ?>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-md-6">
                <div class="footer-logo">
                    <a href="/"><img src="images/logo.png"></a>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>