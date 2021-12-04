
<?php 

    $image = "../img/fleur.jpg";
    $nom = "Kelvine Djokouo";
    $metier = "Architecte logiciel / DevOps";
    
?>

<div>
    <div class="identification">

        <div class="degrade"></div>

        <div class="searchBar" id="searchBar">
            <img src="../img/menu_filled_50px.png" alt="" class="icon" id="menu">
            <input type="text" placeholder="Besoin d'un chef de projet ?" class="input-searchBar">
            <img src="../img/search_50px.png" alt="" class="icon" id="menu">
            <img src="../img/thick_vertical_line_filled_50px.png" alt="" class="icon">
            <img src="../img/delete_sign_32px.png" alt="" class="icon" >
        </div>

        <div class="description-prileminaire">
            <img src="<?php echo $image ?>" class="imageProfil" />
            <div class="poste">
                <h2><?php echo $nom ?></h2>
                <p class="metier"><?php echo $metier ?></p>
            </div>
        </div>
    </div>
</div>
