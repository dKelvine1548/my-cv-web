<?php

    require("../connexion_bd.php");
    session_start();
    $_SESSION["user_name"] = null;

    if(isset($_POST["username"]) && isset($_POST["passwords"])){
        $nomUtilisateur = $_POST["username"] ;
        $motDePasse =  $_POST["passwords"];

        $stm_select_user = "SELECT id, username, passwords FROM users WHERE username = '$nomUtilisateur' AND passwords = '$motDePasse' ";
        $res= $dbhandler->query($stm_select_user);

        while($row=$res->fetch()){
            $_SESSION["id"]=$row[0];
            $_SESSION["user_name"]=$row[1];
        }
       
        header('Location: ../pages/edit.php');
        
        

    }
    else{

        echo "<font color='red'; size =18px ><b> Mot de passe ou nom d\'utilisateur invalide <font color='red'><b>";
       // header('Location: ../pages/login.php');
    }

?>