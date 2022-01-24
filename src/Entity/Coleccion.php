<?php

namespace App\Entity;

use App\Repository\ColeccionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity=Azulejo::class, mappedBy="coleccion")
     */
    private $azulejos;

    public function __construct()
    {
        $this->azulejos = new ArrayCollection();
    }


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

    /**
     * @return Collection|Azulejo[]
     */
    public function getAzulejos(): Collection
    {
        return $this->azulejos;
    }

    public function addAzulejo(Azulejo $azulejo): self
    {
        if (!$this->azulejos->contains($azulejo)) {
            $this->azulejos[] = $azulejo;
            $azulejo->setColeccion($this);
        }

        return $this;
    }

    public function removeAzulejo(Azulejo $azulejo): self
    {
        if ($this->azulejos->removeElement($azulejo)) {
            // set the owning side to null (unless already changed)
            if ($azulejo->getColeccion() === $this) {
                $azulejo->setColeccion(null);
            }
        }

        return $this;
    }

}