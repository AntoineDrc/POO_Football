<?php 


class Pays
{
    private string $nom;
    private array $equipes = [];
    private array $joueurs = [];

    // Initialisation du constructeur
    public function __construct(string $nom)
    {   
        $this->nom = $nom;
        $this->equipes = [];
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

    // Méthode ajout équipe
    public function ajouterEquipe(Equipe $equipe)
    {
        $this->equipes[] = $equipe;
    }

    // Méthode ajout joueur
    public function ajouterJoueur(Joueur $joueur)
    {
        $this->joueurs[] = $joueur;
    }

    // Méthode pour lister les équipes
    public function listerEquipe()
    {
        echo "<b>Equipes de la " . $this->getNom() . " :</b><br>";
        foreach ($this->equipes as $equipe)
        {
            echo $equipe->getNom() . "<br>";
        }
    }
}

?>
