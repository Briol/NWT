<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 11/04/2018
 * Time: 14:50
 */

class Salle
{
    private $id;
    private $nom;
    private $capacite;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getCapacite()
    {
        return $this->capacite;
    }

    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }
}

$salle = new Salle();