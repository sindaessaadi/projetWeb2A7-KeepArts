<?php

class Client
{
    private ?int $idClient = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private  $iduser = null;
 
    public function __construct($iduser, $n, $p, $a, $id = null)
    {
        $this->idClient = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $a;
        $this->iduser = $iduser;
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
    public function getIdUser()
    {
        return $this->iduser;
    }

    public function setIdUser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }
   
}