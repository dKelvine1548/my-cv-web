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


<!-- modal formular -->
<div class="modal fade" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Envoyer un message</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="composants/envoi_mail.php">
                <div class="message"></div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Adresse mail:</label>
                        <input type="text" class="form-control" id="recipient-name" name="adresseMail">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="coordonnees">
    <div class="deux-buttons" id="DeuxButtons">
        <button class="btn-envoyer" id="btn-email" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="../img/mail_filled_30px.png" alt="" class="icon" id="small-icon">
        </button> 

        <button class="btn-envoyer" id="btn-send" type="submit">
            <img src="../img/downloading_updates_26px.png" alt="" class="icon" id="small-icon">
        </button>

        

    </div>

    <button class="btn-envoyer" onclick="showDiv();" id="button-click">
        <img src="../img/share_30px.png" alt="" class="icon">
    </button>

    <script>
        function showDiv() {
            var maDiv = document.getElementById('DeuxButtons');

            //get the current value of div's  diasplay property
            var displaySetting = maDiv.style.display;

            //get the id of button that will display our div's button
            var monButton = document.getElementById('button-click');

            if (displaySetting == 'block') {
                maDiv.style.display = 'none';
                monButton.innerHTML = "<img src=\'../img/share_30px.png'  class =\'icon\'>"
                
            } else {
                maDiv.style.display = 'block';
                monButton.innerHTML = "<img src=\'../img/multiply_24px.png'  class =\'icon\'>";
            }
            
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