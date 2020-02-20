<?php

class voiture
{
    private $marque;
    private $modele;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
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
}