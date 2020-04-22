<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartamentosRepository")
 */
class Departamentos {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $codDepartamento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descDepartamento;

    /**
     * @ORM\Column(type="integer")
     */
    private $volumenNegocio;

    public function getId(): ?int {
        return $this->id;
    }

    public function getCodDepartamento(): ?string {
        return $this->codDepartamento;
    }

    public function setCodDepartamento(string $codDepartamento): self {
        $this->codDepartamento = strtoupper($codDepartamento);

        return $this;
    }

    public function getDescDepartamento(): ?string {
        return $this->descDepartamento;
    }

    public function setDescDepartamento(string $descDepartamento): self {
        $this->descDepartamento = $descDepartamento;

        return $this;
    }

    public function getVolumenNegocio(): ?int {
        return $this->volumenNegocio;
    }

    public function setVolumenNegocio(int $volumenNegocio): self {
        $this->volumenNegocio = $volumenNegocio;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion(\DateTimeInterface $fechaCreacion): self {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

}
