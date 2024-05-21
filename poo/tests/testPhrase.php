<?php

require_once "../classes/Phrase.php";

$phrase1 = new Phrase("il pleut demain et aussi demain il pleut");
echo $phrase1->getPhrase();
echo PHP_EOL;
echo $phrase1->calculerNombreMot();
echo PHP_EOL;
echo $phrase1->calculerNombreCaractere();
echo PHP_EOL;
echo $phrase1->positionMot("pleut");
echo PHP_EOL;
echo $phrase1->positionMot("demain");
echo PHP_EOL;
echo $phrase1->determinerTypePhrase();
echo PHP_EOL;
echo $phrase1->compterOccurrencesMot("demain");
echo PHP_EOL;
echo $phrase1->remplacerMot("demain", "maxime");
echo PHP_EOL;
echo $phrase1->reformaterPhrase();
echo PHP_EOL;
echo $phrase1->compterVoyelles();
echo PHP_EOL;