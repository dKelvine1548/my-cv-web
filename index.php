<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>


<?php 

    require_once('classes/personne.php');
    $profile = new Personne(
         "Kelvine Djokouo", 
         "Architecte logiciel / DevOps",
         "../img/fleur.jpg","15 janvier 1990", 
         "ouest",
         "Célibataire",
         "Logbessou",
         "Douala",
         "Cameroun",
         "RAS",
         4.053276,
         9.765047,
         "(237) 657 282 848",
         array("Mobile", "Telegram", "Whatsapp"),
         "djokouokelvine@gmail.com",
         array("Google+", "Twitter", "Linkedin", "Github"),
         45,
         31,
         12
    );

    

?> 

<body>
    <div class="containers">
        <div class="section1">

            <?php echo $profile->afficheProfile()?> 

            
        </div>

        <div class="section2"> 

            <?php require_once('composants/competences_techniques.php')?> 

        </div> 

        <div class="section3"> 

            <?php require_once('composants/exprerience_prof.php')?> 

            <?php require_once('composants/interets_langues.php')?>

            <?php require_once('composants/cursus_academique.php')?>

        </div>    
        </div>
    </div>
</body>

</html>