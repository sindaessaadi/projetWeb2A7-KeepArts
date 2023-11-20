<?php

class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $address;
    private string $role;


    public function __construct(int $id,string $n, string $p, string $address,string $role)
    {   $this->id=$id;
        $this->firstName = $n;
        $this->lastName = $p;
        $this->address = $address;
        $this->role=$role;
    }

    public function getNom()
    {
        return $this->firstName;
    }
    public function getPrenom()
    {
        return $this->lastName;
    }

    public function setNom($nom)
    {
        $this->firstName = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->lastName = $prenom;
    }

    public function getAddress()
    {
        return $this->address;
    }
  
    public function getRole()
    {
        return $this->role;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
