<?php 

require_once 'Pays.php';

class Joueur 
{
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private Pays $pays;
    private array $contrats = [];

    // Initialisation du constructeur
    public function __construct(string $prenom, string $nom, string $dateNaissance, Pays $pays)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->pays = $pays;
    }

    // Getters / setters
    public function getPrenom()
    {
            return $this->prenom;
    }

    public function setPrenom($prenom)
    {
            $this->prenom = $prenom;

            return $this;
    }

    public function getNom()
    {
            return $this->nom;
    }

    public function setNom($nom)
    {
            $this->nom = $nom;

            return $this;
    }

    public function getDateNaissance()
    {
            return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
            $this->dateNaissance = $dateNaissance;

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

    // Méthode ajout contrat
    public function ajouterContrat(Contrat $contrat)
    {
        $this->contrats[] = $contrat;
    }

    // Méthode calcul $age joueur
    public function ageJoueur()
    {
        $diff = $this->dateNaissance->diff(new DateTime());
        return $diff->y;
    }
}



?>
