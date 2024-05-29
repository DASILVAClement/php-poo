<?php
require_once 'Livre.php';
require_once 'Auteur.php';
require_once 'Categorie.php';
require_once 'Editeur.php';

//Créer un auteur
$auteur1 = new Auteur('Orwell', 'George');
$categorie1 = new Categorie('SF');
$editeur1 = new Editeur('Editeur1', 'Paris');
//Créer un livre
$livre1 = new Livre('1111', '1984', '12/03/1940', 400, $auteur1, $editeur1, $categorie1);
//Associer l'auteur au livre
$livre1->setAuteur($auteur1);
//Afficher le nom de l'auteur de $livre1
echo $livre1->getAuteur()->getNom();
echo PHP_EOL;
echo $livre1->getCategorie()->getCategorieLivre();
echo PHP_EOL;
echo $livre1->getEditeur()->getNom();