<?php

 class Personne {

     public $Nom;
     public $Metier;
     public $Photo;

    public function _construct(string $nom, string $metier, string $photo){
        $this->Nom = $nom;
        $this->Metier = $metier;
        $this->Photo = $photo;
        
    }
}
?>
