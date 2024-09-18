<?php 

require_once 'Pays.php';

class Equipe 
{
    private string $nom;
    private Pays $pays;
    private array $contrats = [];

    // Initialisation du constructeur
    public function __construct(string $nom, Pays $pays)
    {
        $this->nom = $nom;
        $this->pays = $pays;
    }

    // Getters / setters
    public function getNom()
    {
            return $this->nom;
    }

    public function setNom($nom)
    {
            $this->nom = $nom;

            return $this;
    }

    public function getPays()
    {
            return $this->pays;
    }

    public function setPays($pays)
    {
            $this->pays = $pays;

            return $this;
    }
}




?>
