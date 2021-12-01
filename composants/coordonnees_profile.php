

<?php 

    $annee_naissance="15 janvier 1990";
    $region_origine="ouest";
    $statut_matrimonial="Célibataire";
    $quartier="Logbessou";
    $ville="Douala";
    $pays="Cameroun";
    $sante="RAS";
    $longitude="4.053276";
    $latitude="9.765047";
    $telephone="(237) 657 282 848";
    $reseau_social= array("Mobile", "Telegram", "Whatsapp");
    $arr_reseau_social_String = implode(", ", $reseau_social);
    $email="djokouokelvine@gmail.com";
    $reseau_social_travail= array("Google+", "Twitter", "Linkedin", "Github");
    $arr_reseau_social_travail_String = implode(", ", $reseau_social_travail);
    $projet=45;
    $contrat=31;
    $anne_experience=12;

?>


<div class="coordonnees">
        <button class="btn-ajouter">
            <img src="../img/share_30px.png" alt="" class="icon" id="icon-infos">
        </button>
        <div class="infos-perso">
                        <div class="bloc">
                        <img src="img/birthday_cake_30px.png" alt="" class="icon-infos">
                            <div class="infos">
                                <strong>
                                    <p>Née le <?php echo $annee_naissance ?></p>
                                    <p>Originaire de l'<?php echo $region_origine." ".$pays?> </p>
                                    <p><?php echo $statut_matrimonial ?> - Santé <?php echo $sante ?></p>
                                </strong>
                                <hr class="trait">
                            </div>

                        </div>
                        <div class="bloc">
                            <img src="img/location_filled_30px.png" alt="" class="icon-infos">
                            <div class="infos">
                                <strong>
                                    <p>Résident à <?php echo $quartier ?></p>
                                    <p><?php echo $ville ?> - <?php echo $pays ?></p>
                                    <p>Map
                                </strong>: <?php echo $longitude ?>, <?php echo $latitude ?></p>
                                <hr class="trait">
                            </div>
                        </div>
                        <div class="bloc">
                            <img src="img/phone_30px.png" alt="" class="icon-infos">
                            <div class="infos">
                                <strong>
                                    <p><?php echo $telephone ?></p>
                                </strong>
                                <p><?php echo $arr_reseau_social_String ?></p>
                                <hr class="trait">
                            </div>

                        </div>
                        <div class="bloc">
                            <img src="img/mail_filled_30px.png" alt="" class="icon-infos">
                            <div class="infos">
                                <strong>
                                    <p><?php echo $email ?></p>
                                </strong>
                                <p><?php echo $arr_reseau_social_travail_String ?></p>
                            </div>
                        </div>
                        <div class="projet">
                            <strong>+<?php echo $projet ?> projets</strong>
                            <p>+<?php echo $contrat ?> contrats</p>
                            <p><?php echo $anne_experience ?> ans D'exp</p>

                        </div>
        </div>
</div>
<div class="trait-rouge"></div>