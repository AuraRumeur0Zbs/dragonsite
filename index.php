<?php session_start(); 

    //ajouter
    //setcookie('pseudo', 'Graven', time() + (30 * 24 * 3600));
    //setcookie('id', 18, time() + 60);


    //if(isset($_COOKIE['pseudo']))
    //{
    //    echo "l'element existe bien " . $_COOKIE['pseudo'];
    //}
    //else
    //{
    //    echo "l'element n'existe pas";
    //}
    //
    //echo "id : " . $_COOKIE['id'];

?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/headsettings.php'; ?>
    <title>Home | DragonSpirit</title>

    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/articles.css">
</head>
<body>

    <?php include 'includes/navbar.php'; ?>
 
    <div class="articles" id="news">
        <div class="container">
                <h2 class="articles_title">Les News</h2>
                <div class="articles_items">
                    <a href="article1.php" class="article" style="background: url(public/img/article1.png);background-size: cover;">
                        <div class="article_filter"></div>
                        <div class="article_name">McCube ouvre ses Portes</div>
                        <div class="article_icon"><i class="fas fa-play"></i></div>
                    </a>
                    <div class="article" style="background: url(public/img/article2);background-size: cover;">
                        <div class="article_filter"></div>
                        <div class="article_name">Mamexia's un nouveau serveur ?</div>
                        <div class="article_icon"><i class="fas fa-play"></i></div>
                    </div>
                    <div class="article" style="background: url(public/img/article3.jpg);background-size: cover;">
                        <div class="article_filter"></div>
                        <div class="article_name">weshden</div>
                        <div class="article_icon"><i class="fas fa-play"></i></div>
                    </div>
                </div>
        </div>
    </div>


    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="public/js/app.js"></script>

    <!-- <h1>Bienvenue sur votre profil</h1>
        <?php
        
            if(isset($_SESSION['email']) && (isset($_SESSION['date'])))
            {
                
                ?>

                <p>Votre Email : <?= $_SESSION['pseudo']; ?> </p>
                <p>Votre date : <?= $_SESSION['date']; ?> </p>

                <?php

            }else{
                echo "Veuillez vous connectez à votre compte";
            }

        ?>

        <?php

        include 'includes/database.php';
        global $db;


        ?>

        <h1>Login</h1>
        <form method="post">
            <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br/>
            <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de Passe" required><br/>
            <input type="submit" name="formlogin" id="formlogin">
        </form>

        <?php include 'includes/login.php'; ?>

        <h1>Signin</h1>
        <form method="post">
            <input type="email" name="email" id="email" placeholder="Votre Email" required><br/>
            <input type="password" name="password" id="password" placeholder="Votre Mot de Passe" required><br/>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de Passe" required><br/>
            <input type="submit" name="formsend" id="formsend">
        </form>

        <?php include 'includes/signin.php'; ?> -->
</body>
</html>