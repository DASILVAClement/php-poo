<?php

require_once "../classes/Phrase.php";

$phrase1 = new Phrase("il pleut demain ");
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
echo $phrase1->ponctuationPhrase();