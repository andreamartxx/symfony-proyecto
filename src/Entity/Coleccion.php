<?php

namespace App\Entity;

use App\Repository\ColeccionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ColeccionRepository::class)
 */
class Coleccion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blancos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cementados;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maderas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $metal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $piedra;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vintage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlancos(): ?string
    {
        return $this->blancos;
    }

    public function setBlancos(string $blancos): self
    {
        $this->blancos = $blancos;

        return $this;
    }

    public function getCementados(): ?string
    {
        return $this->cementados;
    }

    public function setCementados(string $cementados): self
    {
        $this->cementados = $cementados;

        return $this;
    }

    public function getMaderas(): ?string
    {
        return $this->maderas;
    }

    public function setMaderas(string $maderas): self
    {
        $this->maderas = $maderas;

        return $this;
    }

    public function getMetal(): ?string
    {
        return $this->metal;
    }

    public function setMetal(string $metal): self
    {
        $this->metal = $metal;

        return $this;
    }

    public function getPiedra(): ?string
    {
        return $this->piedra;
    }

    public function setPiedra(string $piedra): self
    {
        $this->piedra = $piedra;

        return $this;
    }

    public function getVintage(): ?string
    {
        return $this->vintage;
    }

    public function setVintage(string $vintage): self
    {
        $this->vintage = $vintage;

        return $this;
    }
}
