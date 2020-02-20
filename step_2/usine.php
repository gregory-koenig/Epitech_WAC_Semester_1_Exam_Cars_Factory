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

    public function assembler($marque, $modele, $compteur = 0) {
        static $i = 0;
        static $j = 0;
        if ($this->modele == 'Nano') {
            $i++;
            return "Voiture $this->marque modèle: $this->modele #$i, compteur : $compteur km\n";
        } elseif ($this->modele == 'Safari') {
            $j++;
            return "Voiture $this->marque modèle: $this->modele #$j, compteur : $compteur km\n";
        }
        return null;
    }

    public function conduire($compteur) {
        if ($compteur == 60000) {
            echo "Roue endommagée.\n";
        } elseif ($compteur == 1) {
            echo "La voiture ne peut pas rouler.\n";
        } elseif ($compteur == 200000) {
            echo "Roue endommagée.\nCarroserie endommagée.\n";
        }
    }

    public function reparer($voiture) {
        if ($compteur < 200000) {
            echo "Roue réparée.\n";
        } elseif ($compteur >= 200000) {
            echo "Roue réparée.\nCarrosserie réparée.\n";
        }
    }
}

$usine = new Usine('Tata Motors', 'Nano');
$roue = new Roue();
$carrosserie = new Carrosserie();
$voiture1 = $usine->assembler($roue, $carrosserie);
echo $voiture1;
$voiture1->conduire(90000);
echo "$voiture1";
$voiture1->conduire(60000);
$voiture1->conduire(1);
$usine->reparer($voiture1);
$voiture1->conduire(200000);
$usine->reparer($voiture1);