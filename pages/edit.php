<?php 

    session_start();
    if($_SESSION["user_name"]== null){
        session_destroy();
        echo "<font color='red'><b> Paramètres érronés </b></font>";
        header("Location: login.php");
    }

?>