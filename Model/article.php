<?php
class Article
{

    private ?int $id = null;
    private ?string $nom = null;
    private ?int $artiste = null;
    private ?string $type = null;
    private $date = null;
    private ?bool $status = null;
    private $format = 'd-m-Y';


    public function __construct($n, $a, $t, $d, $s)
    {
        $this->nom = $n;
        $this->artiste = intval($a);
        $this->type = $t;
        $this->date = DateTime::createFromFormat($this->format, $d);
        $this->status = boolval($s);
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

    public function getArtiste(): int
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