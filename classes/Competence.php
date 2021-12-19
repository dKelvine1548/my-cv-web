<?php 

     class Competence{

        public $nom_competence;
        //public $niveau;

        public function __construct($nom_competence)
        {
            $this->nom_competence = $nom_competence;
            //$this->element_competence = $element_competence;
            //$this->niveau = $niveau;
        }

        public function ajouter(){

        }
    
        public function modifier(){
    
        }
    
        public function supprimer(){
    
        }

        public function affiche_experience(){
            echo '
            <div class="competence-technique">
                    <input type="checkbox"  id="check-input" checked="true">
                    <div class="competence">
                        <h2 class="titre-competence"><?php echo $titre_competence_technique[0]?></h2>
                        <p class="specification"><?php echo $element_competence_technique[0]?></p>
                        <div class="progressbar">
                            <span class="progressbar-blue" id="progressbar-blue1"></span>
                            <span class="corner" id="corner1"></span>
                        </div>
                    </div>                     
                    <i class="fas fa-star"></i> 
                </div> 

                <div class="competence-technique"> 
                    <input type="checkbox"  id="check-input" checked="true">
                    <div class="competence">
                        <h2 class="titre-competence"><?php echo $titre_competence_technique[1]?></h2>
                        <p class="specification"><?php echo $element_competence_technique[1]?></p>
                        <div class="progressbar">
                            <span class="progressbar-blue" id="progressbar-blue2"></span>
                            <span class="corner" id="corner2"></span>
                        </div>
                    </div>
                    <i class="fas fa-star"></i>
                </div>

                <div class="competence-technique">
                    <input type="checkbox"  id="check-input" checked="true" >
                    <div class="competence">
                        <h2 class="titre-competence"><?php echo $titre_competence_technique[2]?></h2>
                        <p class="specification"><?php echo $element_competence_technique[2]?></p>
                        <div class="progressbar">
                            <span class="progressbar-blue" id="progressbar-blue3"></span>
                            <span class="corner" id="corner3"></span>
                        </div>
                    </div>
                    <i class="fas fa-star"></i>
                </div>

                <div class="competence-technique">
                    <input type="checkbox"  id="check-input" checked="true">
                    <div class="competence">
                        <h2 class="titre-competence"><?php echo $titre_competence_technique[3]?></h2>
                        <p class="specification"><?php echo $element_competence_technique[3]?></p>
                        <div class="progressbar">
                            <span class="progressbar-blue" id="progressbar-blue4"></span>
                            <span class="corner" id="corner4"></span>
                        </div>
                    </div>
                    <i class="fas fa-star"></i>
                </div>

                <div class="competence-technique">
                    <input type="checkbox"  id="check-input" checked="true">
                    <div class="competence">
                        <h2 class="titre-competence"><?php echo $titre_competence_technique[4]?></h2>
                        <p class="specification"><?php echo $element_competence_technique[4]?></p>
                        <div class="progressbar">
                            <span class="progressbar-blue" id="progressbar-blue5"></span>
                            <span class="corner" id="corner5"></span>
                        </div>
                    </div>
                    <i class="fas fa-star"></i>
                </div>

                <div class="competence-technique">
                    <input type="checkbox"  id="check-input" checked="true">
                    <div class="competence">
                        <h2 class="titre-competence"><?php echo $titre_competence_technique[5]?></h2>
                        <p class="specification"><?php echo $element_competence_technique[5]?></p>
                        <div class="progressbar">
                            <span class="progressbar-blue" id="progressbar-blue6"></span>
                            <span class="corner" id="corner6"></span>
                        </div>
                    </div>
                    <i class="fas fa-star"></i>
    </div> 
    ';
        }
    }
        
?>