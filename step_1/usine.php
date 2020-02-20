<?php

include_once 'carrosserie.php';
include_once 'roue.php';
include_once 'voiture.php';

class usine
{
    private $marque;
    private $modele;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function __toString()
    {
        return "Usine de $this->marque fabriquant des $this->modele.\n";
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function assembler($marque, $modele) {
        static $i = 0;
        static $j = 0;
        if ($this->modele == 'Nano') {
            $i++;
            return "Voiture $this->marque modèle: $this->modele #$i\n";
        } elseif ($this->modele == 'Safari') {
            $j++;
            return "Voiture $this->marque modèle: $this->modele #$j\n";
        }
        return null;
    }
}

$usine = new Usine('Tata Motors', 'Nano');
$roue = new Roue();
$carrosserie = new Carrosserie();
$voiture1 = $usine->assembler($roue, $carrosserie);
$voiture2 = $usine->assembler($roue, $carrosserie);
echo $usine;
echo $voiture1;
echo $voiture2;
$usine->setModele('Safari');
$voiture3 = $usine->assembler($roue, $carrosserie);
$usine->setModele('Nano');
$voiture4 = $usine->assembler($roue, $carrosserie);
echo $voiture3;
echo $voiture4;