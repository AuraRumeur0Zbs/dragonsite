<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'includes/headsettings.php'; ?>
        <title>Inscription | DragonSpirit</title>

        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/form.css">
    </head>
    <body>

    <?php
    include 'includes/database.php';
    global $db;
    ?>

    <?php include 'includes/navbarother.php' ?>

    <div class="container">
        <div class="form">
            <div class="form-title">Inscription</div>
            <form class="form_inner" action="" method="post">
                 <div class="form_line">
                    <div class="form_block">
                        <h4 class="form_label">Nom</h4>
                        <input class="form_input" type="text" placeholder="Test">
                    </div> 
                    <div class="form_block">
                        <h4 class="form_label">Email</h4>
                        <input class="form_input" type="email" name="email" id="email" placeholder="test@gmail.com" required><br/> 
                    </div>  
                 </div>
                 <div class="form_line">
                    <div class="form_block">
                        <h4 class="form_label">Mot de passe</h4>
                        <input class="form_input" type="password" name="password" id="password" placeholder="123456" required><br/>
                    </div> 
                    <div class="form_block">
                        <h4 class="form_label">Confirmation mot de passe</h4>
                        <input class="form_input" type="password" name="cpassword" id="cpassword" placeholder="123456" required><br/>
                    </div>  
                 </div> 
                 <input type="submit" name="formsend" id="formsend" class="btn" value="S'inscrire"></input>
                <?php include 'includes/signin.php'; ?>   
            </form>
        </div>
    </div>
    
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="public/js/app.js"></script>
    </body>
</html>