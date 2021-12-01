<?php 

    $cursus_academique = array (
        array
        (
            "diplome" => "DIPET 2 Electrotechnique",
            "school" => "ENSET de Douala",
            "date_diploma" => "Aout 2016",
            "specification" => "Gestion d'éclairage d'une maison (Android + Adruino)",
        ),

        array
        (
            "diplome" => "Oracle Certified Associate",
            "school" => "Kentnix Sarl",
            "date_diploma" => "Mars 2009",
            "specification" => "Oracle database 11g Administration",
        ),

        array
        (
            "diplome" => "Oracle SQl Certified",
            "school" => "Kentnix Sarl",
            "date_diploma" => "Décembre 2008",
            "specification" => "SQl 2, SQL 3, XML",
        ),

        array
        (
            "diplome" => "Licence professionnelle",
            "school" => "Douala Institute of Tech.",
            "date_diploma" => "Octobre 2008",
            "specification" => "Télécommunication & Réseaux",
        ),

        array
        (
            "diplome" => "DEC / BTS",
            "school" => "CCNB Dieppe - Canada",
            "date_diploma" => "Septembre 2007",
            "specification" => "Programmation Appliquée Pour Internet",
        ),

        array
        (
            "diplome" => "Baccalauréat",
            "school" => "Lycée Technique de Douala Bassa",
            "date_diploma" => "Aout 2005",
            "specification" => "Electrotechnique, mention BIEN (major de centre)",
        ),

        array
        (
            "diplome" => "DIPET 2 Electrotechnique",
            "school" => "ENSET de Douala",
            "date_diploma" => "Aout 2016",
            "specification" => "Gestion d'éclairage d'une maison (Android + Adruino)",
        ),

        array
        (
            "diplome" => "Oracle Certified Associate",
            "school" => "Kentnix Sarl",
            "date_diploma" => "Mars 2009",
            "specification" => "Oracle database 11g Administration",
        ),

        array
        (
            "diplome" => "Oracle SQl Certified",
            "school" => "Kentnix Sarl",
            "date_diploma" => "Décembre 2008",
            "specification" => "SQl 2, SQL 3, XML",
        ),

    ); 
?>

<div>

            <div class="experience-professionnelle" id="cursus-academique">
                <div class="titre-experienceProfessionnelle">
                    <div class="element-titre">
                        <img src="img/motarboard_30px.png" alt="" class="icon-infos"  />
                        <div class="titre-texte">
                            <h3>Expérience Professionnelle</h3>
                            <i> Diplômes et formations certifiantes </i>
                        </div>
                    </div>
                    <img src="img/menu_2_24px.png" alt="" class="icon-infos" />
                </div>

                <div class="responsabilite">
                    <div class="scrollbar">
                        <?php foreach ($cursus_academique as $academie) {  ?>
                            <div class="infos-responsabilite">
                                <p class="respo"><?php echo $academie["diplome"] ?> - <b> <?php echo $academie["school"] ?> </b></p>
                                <p > 
                                    <label class="date"> <?php echo $academie["date_diploma"] ?> - </label>  <i class="texte"><?php echo $academie["specification"] ?></i> 
                                </p> 
                                <hr class="trait" id="trait-fin">
                            </div>
                        <?php }  ?>
                        
                    </div>
                </div>

            </div>
</div>
