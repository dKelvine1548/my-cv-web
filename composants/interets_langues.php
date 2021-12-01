
<?php 

    $image_point_interet = array (

        "../img/stack-overflow.png",
        "../img/Slack-Logo.png",
        "../img/orange.png",
        "../img/PES_2021.png",
        "../img/tango_48px.png",
        "../img/ninho.png",
        "../img/basket.jpeg"

    );

    $langues = array("Français", "Anglais");
?>

<div class="deux-block">
                <div class="point-interet">
                    <h2>Point d'intérêt</h2>
                    <p class="texte">Simple passe temps pour se distraire:</p>
                    <div class="distraction">
                        <div class="distraction-image">
                            <img src= <?php echo $image_point_interet[0] ?> alt="" class="image-interet">
                            <img src= <?php echo $image_point_interet[1] ?> alt="" class="image-interet">
                            <img src= <?php echo $image_point_interet[2] ?> alt="" class="image-interet">
                        </div>
                        <div class="distraction-image">
                            <img src= <?php echo $image_point_interet[3] ?> alt="" class="image-interet">
                            <img src= <?php echo $image_point_interet[4] ?> alt="" class="image-interet">
                            <img src= <?php echo $image_point_interet[5] ?> alt="" class="image-interet">
                            <img src= <?php echo $image_point_interet[6] ?> alt="" class="image-interet">
                        </div>
                    </div>

                </div>
                <div class="langues-expression">
                  
                        <h2>Langues</h2>
                        <p class="texte">Pratiquées en entreprise</p>
                    
                    <div class="langue">
                            <div class= "check-langue">
                                <input type="checkbox" id="check-input" checked="true" />
                                <label class="intitule"><?php echo $langues[0] ?></label>
                            </div>
                           
                            <div class="check-langue">
                                <input type="checkbox" id="check-input" checked="true"/>
                                <label class="intitule"><?php echo $langues[1] ?></label>
                            </div>
                            

                        </div>
                    </div>
</div>