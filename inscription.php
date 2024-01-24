<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       if(isset($_POST['button_inscription'])){
        include "connexion_bdd.php";
        extract($_POST);
        if(isset($email) && isset($mdp1) && $email !="" && $mdp1 !=""  && isset($mdp2) &&  $mdp2 !=""){
             if($mdp2 != $mdp1){
                $error="les mots de passes sont différents";
             }else{
               $req=mysqli_query($con,"SELECT * FROM utilisateurs WHERE email='$email'&& mdp='$mdp1' " );
               if(mysqli_num_rows($req)==0){
                   $req=mysqli_query($con,"INSERT INTO utilisateurs VALUES(NULL,'$email','$mdp1')");
                   if($req){
                       //si le compte a été créé 
                       //on créé une variable pour afficher un message dans la page de connexion 
                       $_SESSION['message_inscription']="<p class='message'>Votre Compte a été créé avec succès !</p>";
                       header("Location:index.php");
                       

                   }else{
                        //sinon 
                    $error="Inscription Echouée !";
                   }

               }else{
                $error="cet email existe déjà";
               }
             }    

        }else{
            $error="Veuillez remplir tous les champs";
        }

        
       }
    ?>
    <form action="" method="POST" class="form_connection_inscription">
        <h1>Inscription</h1>
        <p class="message_error">
            <?php 
                 if(isset($error)){
                    echo $error;
                 }
            ?> 
        </p>
        <label for="">adresse mail</label>
        <input type="email" name="email" >
        <label for="">Mot de passe</label>
        <input type="password" name="mdp1" class="mdp1">
        <label for="">Confirmation du Mot de passe</label>
        <input type="password" name="mdp2" class="mdp2">
        <input type="submit" value="inscription" name="button_inscription">
        <p class="link">Avez vous un compte ? <a href="index.php">Se connecter</a></p>
    </form>
    <script src="script.js"></script>
</body>
</html>