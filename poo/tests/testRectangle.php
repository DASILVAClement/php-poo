<?php
require "../classes/Rectangle.php";
//Utilisation de la classe Rectangle
//Instanciation de la classe Rectangle
$rectangle1 = new Rectangle(12, 10, "vert");
$surface = $rectangle1->calculerSurface();
echo $surface;
echo PHP_EOL;
$rectangle1 = new Rectangle(15, 9, "vert");
echo $rectangle1->calculerSurface();
echo PHP_EOL;
echo "Dimensions du rectangle : " . $rectangle1->getLongueur() . "," . $rectangle1->getLargeur();
echo PHP_EOL;
$rectangle1->setLongueur(20);
echo $rectangle1->calculerSurface();
echo PHP_EOL;
echo $rectangle1->calculerPerimetre();
echo PHP_EOL;
echo "Couleur de fond du rectangle : " . $rectangle1->getCouleurFond();
echo PHP_EOL;
$rectangle1->setCouleurFond("rouge");
echo $rectangle1->getCouleurFond();
echo PHP_EOL;
echo $rectangle1->dessinerRectangle("*");