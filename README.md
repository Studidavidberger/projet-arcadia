# ECF Projet Arcadia


## Introduction au projet Arcadia :
Le zoo Arcadia est un zoo situé en Bretagne, cotoyé chaque mois par plus de 200K visiteurs.

<a href="#">
  <img src="https://github.com/user-attachments/assets/dee0de2d-28d4-444c-ac2c-6eb7346d54efa" width="240">
</a>

>Le projet arcadia consiste en une application web qui permettrai aux visiteurs de visualiser les animaux, leurs états et visualiser les services ainsi que les horaires du zoo, et doit permettre aussi aux employé de suivre et mettre a jour les informations du zoo, comme l’etat des habitats, des animaux, etc...


## Visualisation et conception de la webapp :

  - Page documentation ( ficheir README.md) :

	- plan maquettes, mockup, wireframes des pages.

	- Schema UML des bases de données.
 
  - Demonstration des fonctionnalités demandés.
 
  - Etat de l'intégration des fonctionnalités.
    
  - Dessiner sur support papier les diagramme UML.
  
  - installation et configuration d’un SGBD, et d’une base de donnée.
  
  - Déploiement de l’application.
  
  - sécurisation du site, filtre anti bot, certificat SSL, blocage des ports non necessaires, base de doonnée relationnelles décentrtalisés.



## Avant de coder - Installer et configurer son environnement de travail.

installation IDE VSCode et ses plugins de coding.
Installation parefeu UFW, et système de securité SSH fail2ban.
Installation de XAMPP.
Mise a jour du systeme et des librairies d’applications.
Exportation des variables d’environnements PHP.



## Maquetter des interfaces utilisateur :


- Creer des maquettes du site, mockup, wireframe, maquette sur Figma.

## Réaliser des interfaces utilisateur statiques :

HTML
## Développer la partie dynamique des interfaces :
  
  - animations sur les elements de décor du site.

  - compteur du nombre de visiteur par animaux

  - Animation de l’avis lors de la publication d’un avis d’un visiteur.

## Mettre en place une base de données relationnelle

## installation et config BDD mysql
    - *

## Développer des composants d'accès aux données SQL et NoSQL
    - *

## Développer des composants métier coté serveur
    - *

## Documenter le déploiement d'une application dynamique
    - *

## Intégration :
  
  - API interne de suivi du traffic
  
  - billeterie en ligne
  
  - carte interactive des trajets possibles dans le zoo.
  
  - Mise en avant de l’eco-conception des installations du zoo.

```Stack technique
front : HTML 5, CSS <= 5.3.6, JS
Back-end : PHP PDO, BDD : relationnelle : MySQL
BDD noSQL : MongoDB
```

les besoins utilisateurs :

Demande du proprietaire : 
	- application web qui permetrai aux visiteurs de visualiser les animaux, leurs états et visualiser les
 services ainsi que les horaires du zoo.

	- application web dont les couleurs et le thème font penser à de l’écologie.

	- montrer que le zoo est fier de ses valeurs d’ecologistes.

la page d’accueil (visiteurs)

	- doit comporter une presentation do zoo et quelques images.

	- Mention des differents habitats, services, ainsi que les animaux possédé par le zoo.

	- Les avis du zoo.

Le menu de l’application (visiteurs)
Point de depart de navigation dans l’application contient : 
	- vue globale des pages du site.

	- retour vers la page d’accueil

	- acces a tous les services

	- acces a tout les habitats

	- mini-jeu sur l’ecologie

	- connexion (possible uniquement pour les vétérinaires, employé et administrateur)

	- contact

La vue globale de tous les services (visiteurs)
proposer une interface simple et recapitulative de tous les services que propose le parc.
Les services doivent être configurable depuis l’espace “Administrateur”.
Un service a un nom, une description.
Listes des services : 
- restauration
- visite des habitats avec un guide (gratuit)
- visite du zoo en petit train

Vue globale des habitats (visiteurs)
Mention de tous les habitats que propose le zoo et les animaux associées (affiche que l’image et le nom), puis au clic, l’element affiche le detail de l’habitat ainsi que le detail de chaque animal lorsque la souris les survolent.

Habitat : nom, 1,2 images, description, liste d’animaux.

Espace visiteur

	- Le visiteur peut visualiser les details de l’animal et l’avis du veterinaire, depuis la page habitat.

	- Un visiteur, peut laisser un commentaire depuis la page d’accueil.

	- L’avis affichera un pseudo ainsi qu’un champ “avis” sous forme d’un texte.


Espace employés

	- L’employé decide des avis a valider, et peut changer les horaires du zoo.

	- L’employé s’occupe de l’alimentation quotidienne des animaux, il doit pouvoir selectionner un aniaml et lui ajouter une consommation de nourriture, pour ajouter une consommation, il doit fournir la date, l’heure, puis la nourriture donnée , ainsi que la quantité.


Espace Vetos

	- Le veterinaire saisit l’etat de l’animal, sa nourriture ,le grammage, le derniere passage, et le détail de l’etat de l’animal (facultatif).

	- Les données animal contiennent : prenom, race, une a deux images, habitat affecté.

	- Le vétérinaire autorise les avis depuis sa page employé.

	- Il saisit aussi l’etat de l’habitat.

	- Peut consulter tout ce que l’animal a pu manger d’apres les saisies de l’employé depuis son espace.
    
    - les veterinaires du zoo viennent faire des controles sur chaque animal, avant l’ouverture du zoo, et rapportent ces données sur un espace employé sur le site.


Espace administrateurs

	- L’admin, peut créer un compte de type “employé” et “vétérinaire”, correspondant a un mail identifiant du compte, initialisation du compte envoyé a l’employé par mail, et mot de passe, donné sur demande par mail.

	- L’admin Peut modifier les services, horaires, habitats, et animaux du zoo.

	- L’admin voit les comptes rendu du veterinaire, avec possibilité d’appliquer filtres de recherches par animal ou par dates.

	- Dashboard affichant le nombre de consultation par animal par les visiteurs.

	- Cette information devra être stocké dans une base de données non relationnelle.

	 - Ces données sont exploitées dans le Dashboard administrateur afin que José puisse visualiser quels animaux plaisent le plus.

	- Enfin la creation de compte admin ne doit pas etre possible depuis l’application web.


Page Connexion (pour admin, veterinaire, employé)

	- Seul une personne de type administrateur, vétérinaire ou encore employé peut se connecter.

	- Un visiteur ne peut pas devenir utilisateur, et donc, ne peux pas se crée de compte.

	- Se connecter : saisir son nom d’utilisateur (mail) suivi de mot de passe.

Page Contact (pour visiteur)

	- Un visiteur peut contacter le zoo s’il le souhaite.

	- Acceder a la page contact, puis un formulaire va demander un titre, un description,ainsi qu’un mail afin d’obtenir une réponse.

	- la demande est envoyée par mail au zoo, et la réponse d’un employé peut se faire par mail aussi.



Schema de la base de données :
