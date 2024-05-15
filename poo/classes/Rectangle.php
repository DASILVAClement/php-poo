<?php

//Définition de la classe
class Rectangle
{
    //Attributs
    private int $longueur;
    private int $largeur;
    private string $fond;

    /**
     * @param int $longueur
     * @param int $largeur
     * @param string $fond
     */
    public function __construct(int $longueur, int $largeur, string $fond)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->fond = $fond;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * @param int $longueur
     */
    public function setLongueur(int $longueur): void
    {
        $this->longueur = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @param int $largeur
     */
    public function setLargeur(int $largeur): void
    {
        $this->largeur = $largeur;
    }

    public function calculerSurface(): int
    {
        return $this->longueur * $this->largeur;
    }

    public function __toString(): string
    {
        return $this->longueur . "," . $this->largeur;
    }

    public function calculerPerimetre(): int
    {
        return ($this->longueur + $this->largeur) * 2;
    }

    public function getCouleurFond(): string
    {
        return $this->fond;
    }

    public function setCouleurFond(string $fond): void
    {
        $this->fond = $fond;
    }

    public function dessinerRectangle(string $symbole): string
    {
        $ligne = str_repeat($symbole, $this->longueur) . PHP_EOL;
        $rectangle = str_repeat($ligne, $this->largeur) . PHP_EOL;
        return $rectangle;
    }


}
