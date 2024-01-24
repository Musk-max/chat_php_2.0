<?php
    
    //Demarrer la session 
    session_start();
    if(!isset($_SESSION['user'])){
        // si l'utilisateur n'est pas connecté
        //redirection vers la page de connection 
        header("location:index.php");
    }
    session_destroy();
    header("location:index.php");
    
    
?>