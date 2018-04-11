<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 11/04/2018
 * Time: 14:51
 */

class Groupe
{
    private $id;
    private $nom;
    private $nombre;

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

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
}

$groupe = new Groupe();