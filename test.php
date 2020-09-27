<?php session_start(); 

    //ajouter
    setcookie('pseudo', 'Graven', time() + (30 * 24 * 3600));
    setcookie('id', 18, time() + 60);


    if(isset($_COOKIE['pseudo']))
    {
        echo "l'element existe bien " . $_COOKIE['pseudo'];
    }
    else
    {
        echo "l'element n'existe pas";
    }

    echo "id : " . $_COOKIE['id'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Titre</title>
</head>
<body>

    <a href="../test.php" class="header_navbar-menu-link"></i> Acceuil</a>

    <h1>Bienvenue sur votre profil</h1>
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

    <?php include 'includes/signin.php'; ?>


</body>
</html>