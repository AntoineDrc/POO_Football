
# Projet de gestion d'équipes de football en POO

Ce projet implémente une application de gestion d'équipes de football en Programmation Orientée Objet (POO) avec PHP. L'objectif est de simuler les interactions entre joueurs, équipes, et pays via des classes et objets. Les utilisateurs peuvent lister les équipes par pays, les joueurs par équipe, et les équipes d'un joueur tout au long de sa carrière.

## Technologies utilisées
- **PHP** : Utilisé pour l'implémentation de la logique métier et la gestion des objets.
- **HTML5** : Pour la structure de la page d'affichage.
- **CSS3** : Pour le style et la mise en forme des éléments.
- **JavaScript (facultatif)** : Peut être ajouté pour des interactions supplémentaires.

## Fonctionnalités principales
### Gestion des pays
- **Classe Pays** : Chaque instance de pays contient un ensemble d'équipes de football.
- **Fonctionnalité** : Lister toutes les équipes appartenant à un pays donné.

### Gestion des équipes
- **Classe Equipe** : Chaque équipe possède un nom et est associée à un pays. Elle contient une liste de contrats avec les joueurs.
- **Fonctionnalité** : Lister tous les joueurs associés à une équipe ainsi que leur âge calculé automatiquement en fonction de leur date de naissance.

### Gestion des joueurs
- **Classe Joueur** : Chaque joueur a un prénom, un nom, une date de naissance, et une nationalité. Il peut être lié à plusieurs équipes via des contrats.
- **Fonctionnalité** : Lister toutes les équipes auxquelles un joueur a appartenu avec l'année de début de saison pour chaque équipe.

### Gestion des contrats
- **Classe Contrat** : Associe un joueur à une équipe pour une saison donnée. Gère l'historique des équipes pour chaque joueur.

## Structure du projet
- **PHP** : Les classes sont organisées dans des fichiers séparés pour chaque entité (Pays, Equipe, Joueur, Contrat).
- **HTML** : La structure de la page est utilisée pour afficher les données (équipes par pays, joueurs par équipe, équipes par joueur).
- **CSS** : Le fichier CSS gère le style et les mises en page des différents éléments.

## Exemple d'utilisation
- Lister les équipes d'un pays (ex: France --> PSG, OM, OL, RCSA).
- Lister les joueurs d'une équipe (ex: PSG --> Neymar (30 ans), Lionel Messi (35 ans)).
- Lister toutes les équipes d'un joueur (ex: Lionel Messi (FC Barcelone 2004, PSG 2021)).

