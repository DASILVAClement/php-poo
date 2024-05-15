<?php
require_once "../classes/Personne.php";

$personne1 = new Personne("jacque", "pierre", "10/09/2005");
echo $personne1->getIdentite();
echo PHP_EOL;
echo $personne1->ajouterPrenom("jean");
echo $personne1->ajouterPrenom("paul");
echo $personne1->ajouterPrenom("george");
echo PHP_EOL;
echo $personne1->getIdentiteAdministrative();
echo PHP_EOL;
$dateNaissance = $personne1->getDateNaissance();
echo $dateNaissance->format("d/m/Y");
echo PHP_EOL;
echo $personne1->getDateNaissanceToString();
