<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunidades
 *
 * @ORM\Table(name="comunidades")
 * @ORM\Entity(repositoryClass="App\Repository\ComunidadesRepository")
 */
class Comunidades
{
    /**
     * @var bool
     *
     * @ORM\Column(name="id_comunidad", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @return bool|null
     */
    public function getIdComunidad(): ?bool
    {
        return $this->idComunidad;
    }

    /**
     * @return null|string
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Comunidades
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


}
