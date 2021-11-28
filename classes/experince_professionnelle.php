<?php

    class Experience_professionnelle{
        public $Poste;
        public $Structure;
        public $Date_debut_poste;
        public $Lien_structure;
        public $Realisation;

        public function __construct(string $poste, string $structure, DateTime $date_debut_poste, string $lien_structure, string $realisation)
        {
            $this->Poste=$poste;
            $this->Structure=$structure;
            $this->Date_debut_poste=$date_debut_poste;
            $this->Lien_structure=$lien_structure;
            $this->Realisation=$realisation;
        }


    }

?>