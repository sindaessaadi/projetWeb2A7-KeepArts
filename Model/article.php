<?php

class Article
{
    private int $id;
    private string $nom;
    private int $artiste;
    private string $type;
    private string $date;
    private bool $status;

    public function __construct(int $id, string $nom, int $artiste, string $type, string $date, bool $status)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->artiste = $artiste;
        $this->type = $type;
        $this->date = $date;
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getArtiste(): int
    {
        return $this->artiste;
    }

    public function setArtiste(int $artiste): void
    {
        $this->artiste = $artiste;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }


}
