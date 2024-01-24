      <?php
        session_start();
        if(isset($_SESSION['user'])){
            //si l'utilisateur s'est connecté
            //connexion à la base de données 
            include "connexion_bdd.php";
            //requete pour afficher les messages 
            $req=mysqli_query($con,"SELECT * FROM messages ORDER BY id DESC");
            if(mysqli_num_rows($req)==0){
                //s'il n'y a pas encore de messages 
                echo "";
            }else{// sinon 
                while($row=mysqli_fetch_assoc($req)){
                    //si c'est vous qui avez envoyé le message utilise ce format
                    if($row['email']==$_SESSION['user']){
                        ?>
                            <div class="message your_message">
                                    <span>vous</span>
                                    <p><?=$row['msg']?></p>
                                    <p class="date"><?=$row['date']?></p>
                            </div>
                        <?php

                    }else{
                        //si c'est l'autre qui a envoyé le message on l'affiche sur ce format : 
                            ?>
                                   <div class="message others_message">
                                            <span><?=$row['email']?></span>
                                            <p><?=$row['msg']?></p>
                                            <p class="date"><?=$row['date']?></p>
                                    </div>

                            <?php


                    }

                }
                
            }

        }
      
      ?>
      
      <!--
       
         
    -->