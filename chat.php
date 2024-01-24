<?php
    
    //Demarrer la session 
    session_start();
    if(!isset($_SESSION['user'])){
        // si l'utilisateur n'est pas connecté
        //redirection vers la page de connection 
        header("location:index.php");
    }
    $user=$_SESSION['user'];// on récupère l'email de l'utilisateur
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$user?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <div class="chat">
        <div class="button_email">
            <span><?=$user?></span>
            <a href="deconnexion.php" class="deconnexion_btn">Deconnexion</a>
        </div>
        <!-- messages-->
        <div class="message_box">chargement...</div>
        <!--fin des messages -->
        <?php
           //envoi des messages 
           
           if(isset($_POST['send'])){
            //si vous avez appuyé sur le bouton send
            //recuperons le message
            $message=$_POST['message'];
            //connexion à la base de données 
            include("connexion_bdd.php");
            //verifions si le champ n'est pas vide 
            
            if(isset($message) && $message !=""){
                //inserer le message dans la base de données 
                $req=mysqli_query($con , "INSERT INTO messages VALUES(NULL,'$user','$message',NOW())");
                //on actualise la page 
                header("location:chat.php");

            }
        }else{
            // si la page est vide 
            // on actualise la page 
           //header("location:chat.php");
        }
        ?> 


        <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" rows="2" placeholder="votre message"></textarea>
            <input type="submit" value="envoyé" name="send">
        </form>
        
    </div>
    <script>
            // on actualise automatiquement le chat en utilisant AJAX
            var message_box=document.querySelector('.message_box');
            setInterval(function(){
                var xhttp= new XMLHttpRequest();
                xhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        message_box.innerHTML=this.responseText;
                    }};
                    xhttp.open("GET", "messages.php",true); // récupération de la page message 
                    xhttp.send();
                }
            ,500);// actualiser le chat toutes les 500 ms
    </script>
    
    
</body>
</html>