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

    public function determinerTypePhrase(): string
    {
        if (str_ends_with($this->phrase, '?')) {
            return "La phrase est une phrase interrogative.";
        } elseif (str_ends_with($this->phrase, '!')) {
            return "La phrase est une phrase exclamative.";
        } elseif (str_ends_with($this->phrase, '.')) {
            return "La phrase est une phrase déclarative.";
        } else {
            $this->phrase .= '.';
            return "La phrase est une phrase déclarative.";
        }
    }

    public function compterOccurrencesMot(string $mot): string
    {
        $nombreOccurrences = substr_count(strtolower($this->phrase), strtolower($mot));
        return "Le mot '" . $mot . "' apparaît " . $nombreOccurrences . " fois dans la phrase.";
    }

    public function remplacerMot(string $motCherche, string $motRemplacement): string
    {
        $nouvellePhrase = str_replace($motCherche, $motRemplacement, $this->phrase);
        return $nouvellePhrase;
    }

    public function reformaterPhrase(): string
    {
        $dernierCaractere = substr($this->phrase, -1);

        if (!in_array($dernierCaractere, ['.', '!', '?'])) {
            $this->phrase .= '.';
        }

        return $this->phrase;
    }

    public function compterVoyelles(): string
    {
        $nombreVoyelles = preg_match_all('/[aeiouyAEIOUY]/i', $this->phrase);
        return "La phrase contient " . $nombreVoyelles . " voyelles.";
    }

}

