<?php

namespace App\Entity;

use App\Repository\AtaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AtaRepository::class)]
class Ata
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $infantil = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $juvenil = null;

    #[ORM\Column(length: 20)]
    private ?string $data = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getInfantil(): ?string
    {
        return $this->infantil;
    }

    public function setInfantil(?string $infantil): static
    {
        $this->infantil = $infantil;

        return $this;
    }

    public function getJuvenil(): ?string
    {
        return $this->juvenil;
    }

    public function setJuvenil(?string $juvenil): static
    {
        $this->juvenil = $juvenil;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): static
    {
        $this->data = $data;

        return $this;
    }
}
