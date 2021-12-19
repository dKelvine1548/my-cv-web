<?php

    $dsn = "mysql:localhost:82;port=3306;dbname=cv";
    $username ="root";
    $password="";

    try{
        $dbhandler = new PDO
        ($dsn, $username, $password,
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]
        );
        
        echo 'Base de données connectée';
        
    
    }
    catch(PDOException $ex){
        echo 'Connexion echouée '.$ex->getMessage();

    }
?>