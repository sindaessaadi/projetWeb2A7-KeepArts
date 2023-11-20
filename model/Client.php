<?php
class Client
{
    private ?int $idClient = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    public function __construct($id = null, $n, $p, $a)
    {
        $this->idClient = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $a;
    }


    public function getIdClient()
    {
        return $this->idClient;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
