<?php 

class Contrat 
{
    private Joueur $joueur;
    private Equipe $equipe;
    private DateTime $anneeSaison;

    // Initialisation du constructeur
    public function __construct(Joueur $joueur, Equipe $equipe, string $anneeSaison)
    {
        $this->joueur = $joueur;
        $joueur->ajouterContrat($this);
        $this->equipe = $equipe;
        $equipe->ajouterContrat($this);
        $this->anneeSaison = new DateTime($anneeSaison);
    }

    // Getters / setters
    public function getJoueur()
    {
            return $this->joueur;
    }

    public function setJoueur($joueur)
    {
            $this->joueur = $joueur;

            return $this;
    }

    public function getEquipe()
    {
            return $this->equipe;
    }

    public function setEquipe($equipe)
    {
            $this->equipe = $equipe;

            return $this;
    }

    public function getAnneeSaison()
    {
            return $this->anneeSaison;
    }

    public function setAnneeSaison($anneeSaison)
    {
            $this->anneeSaison = $anneeSaison;

            return $this;
    }
}

?>
