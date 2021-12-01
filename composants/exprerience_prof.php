
<?php 

    $responsabilite_professionnelle = array (
        array
        (
            "responsability" => "Chef des projets technologique",
            "compagny" => "@Ets. M DE M",
            "start_date" => "Juillet 2019",
            "end_date" => "à ce jour",
            "compagny_site" => "http://mdem.com",
            "realisation" => "Chef du projet annuaire-universel.cm de l'ART",
        ),

        array
        (
            "responsability" => "Fondateur & DT",
            "compagny" => "@Startup ChickDev",
            "start_date" => "Juin 2015",
            "end_date" => "à ce jour",
            "compagny_site" => "http://chickdev.com",
            "realisation" => "Réalisation de plusieurs sites web et applications web et mobiles",
        ),

        array
        (
            "responsability" => "Enseignant",
            "compagny" => "@Institut Universitaire de la Côte",
            "start_date" => "Octobre 2011",
            "end_date" => "à ce jour",
            "compagny_site" => "http://myiuc.com",
            "realisation" =>  '"Analyse. UML & MERISE"; "BD/SQL, ORACLE & MySQL";
                            "Dev. IOS & Android"; "BI & Big Data Talend DI & Hadoop".
                            1<sup>ère</sup>, 2<sup>ème</sup>, 4<sup>ème</sup> année',
        ),

        array
        (
            "responsability" => "Developpeur en chef",
            "compagny" => "@Kayroual group",
            "start_date" => "Mai 2013",
            "end_date" => "Juin 2015",
            "compagny_site" => "http://kayroual.com",
            "realisation" => "Réalisation de multiple projets logiciels et web, inforgraphie, ...",
        ),

        array
        (
            "responsability" => "Responsable commercial",
            "compagny" => "@BAO Sarl",
            "start_date" => "Decembre 2012",
            "end_date" => "Juin 2013",
            "compagny_site" => "http://bao-sarl.com",
            "realisation" => "Définition des strategies commerciales,Controle de qualité, suivi...",
        ),

        array
        (
            "responsability" => "Chef des projets technologique",
            "compagny" => "@Ets. M DE M",
            "start_date" => "Juillet 2019",
            "end_date" => "à ce jour",
            "compagny_site" => "http://mdem.com",
            "realisation" => "Chef du projet annuaire-universel.cm de l'ART",
        ),
        
        array
        (
            "responsability" => "Fondateur & DT",
            "compagny" => "@Startup ChickDev",
            "start_date" => "Juin 2015",
            "end_date" => "à ce jour",
            "compagny_site" => "http://chickdev.com",
            "realisation" => "Réalisation de plusieurs sites web et applications web et mobiles",
        ),

        array
        (
            "responsability" => "Enseignant",
            "compagny" => "@Institut Universitaire de la Côte",
            "start_date" => "Octobre 2011",
            "end_date" => "à ce jour",
            "compagny_site" => "http://myiuc.com",
            "realisation" =>  '"Analyse. UML & MERISE"; "BD/SQL, ORACLE & MySQL";
                            "Dev. IOS & Android"; "BI & Big Data Talend DI & Hadoop".
                            1<sup>ère</sup>, 2<sup>ème</sup>, 4<sup>ème</sup> année',
        ),
    ); 

    $current_date = date('Y');
    $smal_year = date(2011);
    // $smal_date= $responsabilite_professionnelle[2][2];
    // $smal_date_convert= new DateTime ($smal_date);
    // $smal_year = date_format($smal_date_convert, "yyyy");
    $annee_experience = $current_date - $smal_year;
    
?>

                <div class="experience-professionnelle">
                    <div class="titre-experienceProfessionnelle">
                        <div class="element-titre">
                            <img src="img/real_estate_80px.png" alt="" class="icon-infos" id="image-batiment" />
                            <div class="titre-texte">
                                <h3>Expérience Professionnelle (<?php echo $annee_experience . "  ans "?>) </h3>
                                <i> Expertise en entreprise</i>
                            </div>

                        </div>
                        <img src="img/menu_2_24px.png" alt="" class="icon-infos" />
                    </div>
                    <div class="responsabilite">
                        <div class="scrollbar">
                            <?php foreach ($responsabilite_professionnelle as $infos) {  ?>
                            <div class="infos-responsabilite">
                                <p class="respo"> <?php echo $infos["responsability"] ?> - <b> <?php echo $infos["compagny"] ?></b></p>

                                <p class="date">De <?php echo $infos["start_date"]." ".$infos["end_date"]?> - <?php echo $infos["compagny_site"] ?></p>

                                <p class="role"> <?php echo $infos["realisation"] ?></p>
                                <hr class="trait" id="trait-fin">
                            </div>
                            <?php }  ?>
                        </div>
                    </div>
    </div>