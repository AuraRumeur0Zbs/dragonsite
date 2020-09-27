<?php

if(isset($_POST['formsend'])){

    extract($_POST);

    if(!empty($password) && !empty($cpassword) && !empty($email)){

        if($password == $cpassword){

            $options = [
                'cost' => 12,
            ];

            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

            $c = $db->prepare("SELECT email FROM users WHERE email = :email");
            $c->execute(['email' => $email]);

            $result = $c->rowCount();

            if($result == 0){
                $q = $db->prepare("INSERT INTO users(email,password) VALUES(:email,:password)");
                $q->execute([
                    'email' => $email,
                    'password' => $hashpass
                ]);
                echo "<h2>Le compte a été créée</h2>";
            }else{
                echo '<h2>Un Email existe deja !</h2>';
            }

        }
        
    }else{
        echo "les champs ne sont pas tous remplies";   
    }
   
}
