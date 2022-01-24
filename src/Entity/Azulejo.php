<?php

namespace App\Entity;

use App\Repository\AzulejoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AzulejoRepository::class)
 */
class Azulejo
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="float")
     */
    private $alto;

    /**
     * @ORM\Column(type="float")
     */
    private $ancho;

    /**
     * @ORM\ManyToOne(targetEntity=coleccion::class, inversedBy="azulejos")
     */
    private $coleccion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAlto(): ?float
    {
        return $this->alto;
    }

    public function setAlto(float $alto): self
    {
        $this->alto = $alto;

        return $this;
    }

    public function getAncho(): ?float
    {
        return $this->ancho;
    }

    public function setAncho(float $ancho): self
    {
        $this->ancho = $ancho;

        return $this;
    }

    public function getColeccion(): ?coleccion
    {
        return $this->coleccion;
    }

    public function setColeccion(?coleccion $coleccion): self
    {
        $this->coleccion = $coleccion;

        return $this;
    }

}
