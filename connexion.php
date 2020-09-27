<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion | DragonSpirit</title>
        <script src="https://kit.fontawesome.com/96ce2d201a.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@1,600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/form.css">
    </head>
    <body>

    <?php include 'includes/navbarother.php'; ?>

    <div class="container">
        <div class="form">
            <div class="form-title">Connexion</div>
            <form class="form_inner" action="">
                 <div class="form_line">
                    <div class="form_block">
                        <h4 class="form_label">Email</h4>
                        <input class="form_input" type="text">
                    </div>  
                 </div>
                 <div class="form_line">
                    <div class="form_block">
                        <h4 class="form_label">Mot de passe</h4>
                        <input class="form_input" type="text">
                    </div>  
                 </div> 
                 <button class="btn">Se connecter</button>   
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