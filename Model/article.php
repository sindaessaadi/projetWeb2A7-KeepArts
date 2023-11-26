<?php
class Article
{

    private ?int $id = null;
    private ?string $nom = null;
    private ?int $artiste = null;
    private ?string $type = null;
    private $date = null;
    private ?bool $status = null;


    public function __construct($n, $a, $t, $d, $s)
    {
        $this->nom = $n;
        $this->artiste = $a;
        $this->type = $t;
        $this->date = new DateTime($d);
        $this->status = $s;
    }

    public function getId()
    {
        return $this->id;
        
    }

    public function getArticleName()
    {
        return $this->nom;
    }

    public function getDate()
    {
        return $this->date;
        
    }

    public function getArtiste(): string
    {
        return $this->artiste;
    }
    
    public function getType(): string
    {
        return $this->type;
    }
    
    public function getStatus(): bool
    {
        return $this->status;
    }
}
