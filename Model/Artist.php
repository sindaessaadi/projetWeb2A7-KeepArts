<?php
class Artist
{

    private ?string $nom = null;
    private ?date $date = null;
    private ?string $artiste = null;
    private ?int $id = null;

    public function __construct( $n, $p, $a, $d)
    {
        $this->nom = $n;
        $this->date = $p;
        $this->artiste = $a;
    }

    /**
     * Get the value of Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Prénom_artiste
     */
    public function getPrénom_artiste()
    {
        return $this->nom;
    }

    /**
     * Set the value of Prénom_artiste
     *
     * @return  self
     */
    public function setPrénom_artiste($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Nom_artiste
     */
    public function getNom_artiste()
    {
        return $this->date;
    }

    /**
     * Set the value of Nom_artiste
     *
     * @return  self
     */
    public function setNom_artiste($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of Adresse
     */
    public function getAdresse_artiste()
    {
        return $this->artiste;
    }

    /**
     * Set the value of Adresse
     *
     * @return  self
     */
    public function setAdresse_artiste($artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }
}