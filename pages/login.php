<?php



echo '

<link rel="stylesheet" href="../style.css">
<form action ="../controllers/loginController.php" method ="POST">
    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
                <h4 class="company_title">Votre cv</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Connexion</h2>
                    </div>
                    <div class="row">
                        <form control="" class="form-group">
                            <div class="row">
                                <input type="text" name="username" class="form__input" placeholder="Nom utilisateur">
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="passwords" class="form__input" placeholder="Mot de passe">
                            </div>
                            <div class="row" id="two-button">
                            
                                <input type="submit" value="Connecter" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
';


?>