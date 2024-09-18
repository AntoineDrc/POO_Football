<h1>POO FOOTBALL</h1>

<p>
Soit une application qui gère des équipes de football
Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) et un ensemble de joueurs 
identifié par un prénom, un nom et une date de naissance
Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, 
Espagne, Allemagne, ...)
Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison)
Concevez le projet en POO de façon à :
- lister toutes les équipes d'un pays (Ex : France --> PSG, OM, OL, RCSA, ...)
- lister tous les joueur s d'une équipe (avec nom, prénom, âge et pays d'origine) Ex : PSG --> Neymar JR 
(30 ans), Lionel Messi (35 ans), Kylian Mbappé (23 ans)
- lister toutes les équipes d'un joueur (Ex : Lionel Messi (FC Barcelone 2004, PSG 2021))
</p>

<?php 

spl_autoload_register(function ($class_name)
{
    require_once 'classes/' . $class_name . ".php";
});

// Instanciation des objets
$france = new Pays("France");


$psg = new Equipe("PSG", $france);
$rcs = new Equipe("RCStrasbourg", $france);

$messi = new Joueur("Lionel", "Messi", "24-06-1987", $france);

$contratMessi = new Contrat($messi, $psg, "2021");

echo $france->listerEquipe() . "<br>";
echo $psg->listerJoueur();
echo $messi->listerEquipe();

?>
