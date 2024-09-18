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
}

?>
