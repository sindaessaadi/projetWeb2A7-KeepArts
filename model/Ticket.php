<?php
class Ticket
{
    private ?int $idTicket = null;
    private ?string $dateexpiration = null;
    private ?string $cvv = null;
    private ?string $numcarte = null;
    public function __construct($id = null, $n, $p, $a)
    {
        $this->idTicket = $id;
        $this->dateexpiration = $n;
        $this->cvv = $p;
        $this->numcarte = $a;
    }


    public function getIdTicket()
    {
        return $this->idTicket;
    }


    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }


    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }


    public function getCvv()
    {
        return $this->cvv;
    }


    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }


    public function getNumcarte()
    {
        return $this->numcarte;
    }


    public function setNumcarte($numcarte)
    {
        $this->numcarte = $numcarte;

        return $this;
    }
}