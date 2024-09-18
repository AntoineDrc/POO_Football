b<?php 

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
        $pays->ajouterEquipe($this);
        $this->contrats = [];
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

    // Méthode pour ajouter contrat
    public function ajouterContrat($contrat)
    {
        $this->contrats[] = $contrat;
    }

    // Méthode lister contrats de l'équipe
    public function listerJoueur()
    {
        echo "<b>Les joueurs sous contrat avec l'équipe " . $this->getNom() . " :</b><br>";
        foreach ($this->contrats as $contrat)
        {
            $joueur = $contrat->getJoueur();
            echo $joueur->getPrenom() . " " . $joueur->getNom() . " " . "(" . $joueur->ageJoueur() ." ans)<br><br>";
        }
    }
}




?>
