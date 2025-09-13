<?php

namespace App\Entity;

use App\Repository\AlunoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlunoRepository::class)]
class Aluno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome_aluno = null;

    #[ORM\Column(length: 255)]
    private ?string $nome_responsavel = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $data_nascimento = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $endereco = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contato = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cpf = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $peso = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $altura = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $tipo_sanguineo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alergia = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $medicamentos = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $numero_pe = null;

    #[ORM\Column(length: 20)]
    private ?string $pe_dominante = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $obs = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeAluno(): ?string
    {
        return $this->nome_aluno;
    }

    public function setNomeAluno(string $nome_aluno): static
    {
        $this->nome_aluno = $nome_aluno;

        return $this;
    }

    public function getNomeResponsavel(): ?string
    {
        return $this->nome_responsavel;
    }

    public function setNomeResponsavel(string $nome_responsavel): static
    {
        $this->nome_responsavel = $nome_responsavel;

        return $this;
    }

    public function getDataNascimento(): ?\DateTime
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento(?\DateTime $data_nascimento): static
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): static
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getContato(): ?string
    {
        return $this->contato;
    }

    public function setContato(?string $contato): static
    {
        $this->contato = $contato;

        return $this;
    }

    public function getRg(): ?string
    {
        return $this->rg;
    }

    public function setRg(?string $rg): static
    {
        $this->rg = $rg;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): static
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getPeso(): ?string
    {
        return $this->peso;
    }

    public function setPeso(?string $peso): static
    {
        $this->peso = $peso;

        return $this;
    }

    public function getAltura(): ?string
    {
        return $this->altura;
    }

    public function setAltura(?string $altura): static
    {
        $this->altura = $altura;

        return $this;
    }

    public function getTipoSanguineo(): ?string
    {
        return $this->tipo_sanguineo;
    }

    public function setTipoSanguineo(?string $tipo_sanguineo): static
    {
        $this->tipo_sanguineo = $tipo_sanguineo;

        return $this;
    }

    public function getAlergia(): ?string
    {
        return $this->alergia;
    }

    public function setAlergia(?string $alergia): static
    {
        $this->alergia = $alergia;

        return $this;
    }

    public function getMedicamentos(): ?string
    {
        return $this->medicamentos;
    }

    public function setMedicamentos(?string $medicamentos): static
    {
        $this->medicamentos = $medicamentos;

        return $this;
    }

    public function getNumeroPe(): ?string
    {
        return $this->numero_pe;
    }

    public function setNumeroPe(?string $numero_pe): static
    {
        $this->numero_pe = $numero_pe;

        return $this;
    }

    public function getPeDominante(): ?string
    {
        return $this->pe_dominante;
    }

    public function setPeDominante(string $pe_dominante): static
    {
        $this->pe_dominante = $pe_dominante;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): static
    {
        $this->obs = $obs;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
