<?php


class Auteur  {
        private string $nom;
        private string $prenom;
        private array $livres;

        public function getNom(): string
        {
                return $this->nom;
        }
        public function setNom(string $nom): self
        {
                $this->nom = $nom;

                return $this;
        }

        public function getPrenom(): string
        {
                return $this->prenom;
        }
        public function setPrenom(string $prenom): self
        {
                $this->prenom = $prenom;

                return $this;
        }

        public function getLivres()
        {
                return $this->livres;
        }
        public function setLivres($livres)
        {
                $this->livres = $livres;

                return $this;
        }
        
        public function __construct($nom,$prenom){
            $this -> nom = $nom;
            $this -> prenom = $prenom;
        }

        public function __toString(){
            return $this -> nom;
        }

        public function addlivres($livres){
            $this -> livres[] = $livres;
        }
        public function livres() {
            return array ("Ca ","Simetierre " ,"Le Fléau " ,"Shinning " );
        }

        public function afficherBibliographie($livres){
            foreach ($livres as $livre){
                $livres[] = $livre;
            }
    
        }
       
    }
    
    
