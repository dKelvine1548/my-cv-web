<?php
class Personne {

    public $nom;
    public $metier;
    public $photo;
    public $date_naissance;
    public $region_origine;
    public $statut_matrimonial;
    public $quartier;
    public $ville;
    public $pays;
    public $statut_sante;
    public $longitude;
    public $latitude;
    public $telephone;
    public $reseau_social;
    public $adresse_email; 
    public $reseau_social_travail;
    public $projet;
    public $contrat;
    public $anne_experience;
    

    public function __construct(
        $nom, 
        $metier, 
        $photo, 
        $date_naissance, 
        $region_origine, 
        $statut_matrimonial,
        $quartier,
        $ville,
        $pays,
        $statut_sante,
        $longitude,
        $latitude,
        $telephone,
        $reseau_social,
        $adresse_email,
        $reseau_social_travail,
        $projet,
        $contrat,
        $anne_experience
    ){
        $this->nom = $nom;
        $this->metier = $metier;
        $this->photo = $photo;
        $this->date_naissance = $date_naissance;
        $this->region_origine = $region_origine;
        $this->statut_matrimonial = $statut_matrimonial;
        $this->quartier = $quartier;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->statut_sante = $statut_sante;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->telephone = $telephone; 
        $this->reseau_social = $reseau_social; 
        $this->adresse_email = $adresse_email; 
        $this->reseau_social_travail = $reseau_social_travail; 
        $this->projet = $projet;
        $this->contrat =$contrat;
        $this->anne_experience = $anne_experience;
    }


    public function ajouter(){

    }

    public function modifier(){

    }

    public function supprimer(){

    }

    public function afficheProfile(){
        echo '
            <div class="identification"> 
                <div class="degrade"></div>
                <div class="searchBar" id="searchBar">
                    <img src="../img/menu_filled_50px.png" alt="" class="icon" id="menu">
                    <input type="text" placeholder="Besoin d\'un chef de projet ?" class="input-searchBar">
                    <img src="../img/search_50px.png" alt="" class="icon" id="menu">
                    <img src="../img/thick_vertical_line_filled_50px.png" alt="" class="icon">
                    <img src="../img/delete_sign_32px.png" alt="" class="icon" >
                </div>
                <div class="description-prileminaire">
                    <img src = " '.$this->photo.' " class="imageProfil" />
                    <div class="poste">
                        <h2>'.$this->nom.'</h2>
                        <p class="metier">'.$this->metier.'</p>
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

                <button class="btn-envoyer" onclick="showDiv(DeuxButtons,button-click );" id="button-click">
                    <img src="../img/share_30px.png" alt="" class="icon">
                </button>

                    require_once ../js/display_buttons.php"

                <div class="infos-perso">
                    <div class="bloc">
                        <img src="img/birthday_cake_30px.png" alt="" class="icon-infos">
                        <div class="infos">
                            <strong>
                                <p>Née le '.$this->date_naissance.'</p>
                                <p>Originaire de l\''.$this->region_origine.' </p>
                                <p>'.$this->statut_matrimonial.' - Santé '.$this->statut_sante.'</p>
                            </strong>
                            <hr class="trait">
                        </div>

                    </div>
                    <div class="bloc">
                        <img src="img/location_filled_30px.png" alt="" class="icon-infos">
                        <div class="infos">
                            <strong>
                                <p>Résident à '.$this->quartier.'</p>
                                <p>'.$this->ville.' - '.$this->pays.'</p>
                                <p>Map
                            </strong>: '.$this->longitude.', '.$this->latitude.'</p>
                            <hr class="trait">
                        </div>
                    </div>
                    <div class="bloc">
                        <img src="img/phone_30px.png" alt="" class="icon-infos">
                        <div class="infos">
                            <strong>
                                <p>'.$this->telephone.'</p>
                            </strong>
                            <p>'.implode(", " ,$this->reseau_social).'</p>
                            <hr class="trait">
                        </div>

                    </div>
                    <div class="bloc">
                        <img src="img/mail_filled_30px.png" alt="" class="icon-infos">
                        <div class="infos">
                            <strong>
                                <p>'.$this->adresse_email.'</p>
                            </strong>
                            <p>'.implode(", " ,$this->reseau_social_travail).'</p>
                        </div>
                    </div>
                    <div class="projet">
                        <strong>+'.$this->projet.' projets</strong>
                        <p>+'.$this->contrat.' contrats </p>
                        <p>'.$this->anne_experience.' ans D\'exp</p>

                    </div>
                </div>

            </div>
            <div class="trait-rouge"></div>
            '; 
    }

}
 
?>