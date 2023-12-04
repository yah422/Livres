<?php
 
 class Livre{
    private string $titre;
    private string $nbreDePages;
    private string $parution;
    private int $prix;
    private Auteur $auteur;


    public function __construct($titre,$nbreDePages,$parution,$prix, Auteur $auteur){
        $this -> titre = $titre;
        $this -> nbreDePages = $nbreDePages;
        $this -> parution = $parution;
        $this -> prix = $prix;
        $this -> auteur = $auteur;
        $this -> auteur ->addLivre($this);
    }


    public function getTitre(): string
    {
            return $this->titre;
    }
    public function setTitre(string $titre): self
    {
            $this->titre = $titre;

            return $this;
    }

    public function getNbreDePages(): string
    {
            return $this->nbreDePages;
    }
    public function setNbreDePages(string $nbreDePages): self
    {
            $this->nbreDePages = $nbreDePages;

            return $this;
    }

    public function getParution(): string
    {
            return $this->parution;
    }
    public function setParution(string $parution): self
    {
            $this->parution = $parution;

            return $this;
    }

    public function getPrix(): int
    {
            return $this->prix;
    }
    public function setPrix(int $prix): self
    {
            $this->prix = $prix;

            return $this;
    }

   
    public function getAuteur(): string
    {
            return $this->auteur;
    }
    public function setAuteur(string $auteur): self
    {
            $this->auteur = $auteur;

            return $this;
    }

    public function __toString(){
        return $this->titre ."(" . $this->parution . ") : " . $this->nbreDePages . " pages / " . $this->prix . " € <br>";
       
    }

}
