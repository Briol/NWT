<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 11/04/2018
 * Time: 14:51
 */

class Intervenant
{
    private $id;
    private $nom;

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

}

$intervenant = new Intervenant();