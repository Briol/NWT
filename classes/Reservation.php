<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 11/04/2018
 * Time: 14:44
 */

class Reservation
{
    private $id;
    private $salle;
    private $disponibilite;
    private $intervenant;
    private $date;
    private $groupe;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getSalle()
    {
        return $this->salle;
    }

    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    public function getIntervenant()
    {
        return $this->intervenant;
    }

    public function setIntervenant($intervenant)
    {
        $this->intervenant = $intervenant;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getGroupe()
    {
        return $this->groupe;
    }

    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    }
}

$reservation = new Reservation();