

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

<!-- <script>
    
    function DisplayButtons() {
        document.getElementById('group-buttons');
    } 

</script> -->

<div class="coordonnees">

        <div class="group-button" id="group-buttons">
            <button class="btn-envoyer" id = "btn-email">
                <img src="../img/mail_filled_30px.png" alt="" class="icon">
            </button>

            <button class="btn-envoyer" id = "btn-send">
                <img src="../img/paper_plane_filled_50px.png" alt="" class="icon">
            </button>
        </div>

        <button class="btn-envoyer" onclick="showDiv();"  id="button-click">
            <img src="../img/share_30px.png" alt="" class="icon">
        </button>

        <script>
            function showDiv() {
                var maDiv = document.getElementById('group-buttons');

                //get the current value of div's  diasplay property
                var displaySetting = maDiv.style.display;

                //get the id of button that will display our div's button
                var monButton = document.getElementById('button-click');

                if(displaySetting == 'block'){
                    maDiv.style.display = 'none';
                    monButton.innerHTML = "<img src=\'../img/share_30px.png'  class =\'icon\'>"
                }

                else{
                    maDiv.style.display = 'block';
                    monButton.innerHTML = "<img src=\'../img/multiply_24px.png'  class =\'icon\'>";
                }

                // document.getElementById('group-buttons').style.display = "block";
                
            }
        </script>
        
        
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