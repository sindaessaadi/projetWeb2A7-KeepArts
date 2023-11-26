<?php
class Article
{

    private ?int $id = null;
    private ?string $nom = null;
    private ?string $artiste = null;
    private ?string $type = null;
    private ?date $date = null;
    private ?bool $status = null;
}
    

    public function __construct( $n, $a, $t, $d, $s)
    {
        $this->nom = $n;
        $this->artiste = $a;
        $this->type = $t;
        $this->date = $d;
        $this->status = $s;
    }

    public function getId()
    {
        return $this->id;
        
    }


    public function getnom_article()
    {
        return $this->nom;
    }

    @return  self

    public function getdate()
    {
        return $this->date;
        
    }
    @return  self


    public function getArtiste(): string
    {
        return $this->artiste;
        }
        @return  self
    
    public function getType(): string
    {
        return $this->type;
        }
        @return  self
    
    public function getStatus(): bool
    {
        return $this->status;
    }


