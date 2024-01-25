<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_POST['button_con'])){
            include "connexion_bdd.php";
            extract($_POST);
            if(isset($email) && isset($mdp1) && $email !="" && $mdp1 !="" ){

                $req=mysqli_query($con,"SELECT * FROM utilisateurs WHERE email='$email' AND 
                   mdp='$mdp1' ");
                if(mysqli_num_rows($req)>0){
                    //creation d'une session 
                    $_SESSION['user']=$email;
                    header("location:chat.php");
                    //détruire la variable message d'inscription quand on va vers le chat
                    unset($_SESSION['message_inscription']);

                }else{
                    $error="email ou mots de passe incorrects";
                }

            }else{
                $error="veuillez remplir tous les champs";
            }
        }
    ?>
    
    <form action="" method="POST" class="form_connection_inscription">
        <h1>Connexion</h1>
        
            <?php 
            //affichage de du message de création de compte avec succès
            
            if(isset($_SESSION['message_inscription'])){
                echo $_SESSION['message_inscription'];
            }
            ?>
        
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
        <input type="password" name="mdp1" id="">
        <input type="submit" value="connexion" name="button_con">
        <p class="link">vous n'avez pas un compte ? <a href="inscription.php">creer un compte </a></p>
    </form>
    
</body>
</html>