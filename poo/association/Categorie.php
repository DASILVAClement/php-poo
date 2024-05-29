<?php

class Categorie
{
    private string $categorieLivre;

    public function __construct(string $categorieLivre)
    {
        $this->categorieLivre = $categorieLivre;
    }

    /**
     * @return string
     */
    public function getCategorieLivre(): string
    {
        return $this->categorieLivre;
    }
}