<?php

namespace App\Entity;

use App\Repository\ResultadoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultadoRepository::class)
 */
class Resultado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="resultado")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $azulejoSeleccionado;

    /**
     * @ORM\Column(type="integer")
     */
    private $superficie;

    /**
     * @ORM\Column(type="integer")
     */
    private $numAzulejo;

    /**
     * @ORM\Column(type="integer")
     */
    private $azulejoMetro;

    /**
     * @ORM\Column(type="integer")
     */
    private $azulejosMetro;

    /**
     * @ORM\Column(type="integer")
     */
    private $numCaja;

    /**
     * @ORM\Column(type="integer")
     */
    private $azulejoCaja;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getAzulejoSeleccionado(): ?string
    {
        return $this->azulejoSeleccionado;
    }

    public function setAzulejoSeleccionado(string $azulejoSeleccionado): self
    {
        $this->azulejoSeleccionado = $azulejoSeleccionado;

        return $this;
    }

    public function getSuperficie(): ?int
    {
        return $this->superficie;
    }

    public function setSuperficie(int $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getNumAzulejo(): ?int
    {
        return $this->numAzulejo;
    }

    public function setNumAzulejo(int $numAzulejo): self
    {
        $this->numAzulejo = $numAzulejo;

        return $this;
    }

    public function getAzulejoMetro(): ?int
    {
        return $this->azulejoMetro;
    }

    public function setAzulejoMetro(int $azulejoMetro): self
    {
        $this->azulejoMetro = $azulejoMetro;

        return $this;
    }

    public function getAzulejosMetro(): ?int
    {
        return $this->azulejosMetro;
    }

    public function setAzulejosMetro(int $azulejosMetro): self
    {
        $this->azulejosMetro = $azulejosMetro;

        return $this;
    }

    public function getNumCaja(): ?int
    {
        return $this->numCaja;
    }

    public function setNumCaja(int $numCaja): self
    {
        $this->numCaja = $numCaja;

        return $this;
    }

    public function getAzulejoCaja(): ?int
    {
        return $this->azulejoCaja;
    }

    public function setAzulejoCaja(int $azulejoCaja): self
    {
        $this->azulejoCaja = $azulejoCaja;

        return $this;
    }
}
