<?php

class Phrase
{
    private string $phrase;

    /**
     * @param string $phrase
     */
    public function __construct(string $phrase)
    {
        $this->phrase = ucfirst(strtolower($phrase));
    }

    public function getPhrase(): string
    {
        return $this->phrase;
    }

    public function calculerNombreMot(): string
    {
        return "La phrase contient " . str_word_count($this->phrase) . " mots.";
    }

    public function calculerNombreCaractere(): string
    {
        $phraseSansEspace = str_replace(' ', '', $this->phrase);
        $nombreCaractere = strlen($phraseSansEspace);
        return "La phrase contient " . $nombreCaractere . " caractères";
    }

    public function positionMot(string $mot): string
    {
        $mots = array_flip(str_word_count($this->phrase, 1));

        if (isset($mots[$mot])) {
            return 'Mot ' . $mot . ' trouvé à la position ' . $mots[$mot] + 1;
        } else {
            return 'Mot ' . $mot . ' pas trouvé';
        }
    }

    public function ponctuationPhrase(): string
    {
        if (str_ends_with($this->phrase, '.')) {
            $phrase = "déclarative";
            return "La phrase est une phrase" . $phrase;
        } else {
            return "La phrase est une phrase";
        }

    }

}

