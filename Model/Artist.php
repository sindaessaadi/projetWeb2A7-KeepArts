<?php
class Artist
{
    private ?int $Id = null;
    private ?string $Prénom_artiste = null;
    private ?string $Nom_artiste = null;
    private ?string $Adresse_artiste = null;
    private ?string $Description = null;

    public function __construct( $n, $p, $a, $d)
    {
        //$this->Id = $id;
        $this->Prénom_artiste = $n;
        $this->Nom_artiste = $p;
        $this->Adresse_artiste = $a;
        $this->Description = $d;
    }

    /**
     * Get the value of Id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Get the value of Prénom_artiste
     */
    public function getPrénom_artiste()
    {
        return $this->Prénom_artiste;
    }

    /**
     * Set the value of Prénom_artiste
     *
     * @return  self
     */
    public function setPrénom_artiste($Prénom_artiste)
    {
        $this->Prénom_artiste = $Prénom_artiste;

        return $this;
    }

    /**
     * Get the value of Nom_artiste
     */
    public function getNom_artiste()
    {
        return $this->Nom_artiste;
    }

    /**
     * Set the value of Nom_artiste
     *
     * @return  self
     */
    public function setNom_artiste($Nom_artiste)
    {
        $this->Nom_artiste = $Nom_artiste;

        return $this;
    }

    /**
     * Get the value of Adresse
     */
    public function getAdresse_artiste()
    {
        return $this->Adresse_artiste;
    }

    /**
     * Set the value of Adresse
     *
     * @return  self
     */
    public function setAdresse_artiste($Adresse_artiste)
    {
        $this->Adresse_artiste = $Adresse_artiste;

        return $this;
    }

    /**
     * Get the value of Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     *
     * @return  self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }
}