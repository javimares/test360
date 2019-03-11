<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias")
 * @ORM\Entity(repositoryClass="App\Repository\ProvinciasRepository")
 */
class Provincias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_provincia", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="provincia", type="string", length=30, nullable=true)
     */
    private $provincia;

    /**
     * @return int|null
     */
    public function getIdProvincia(): ?int
    {
        return $this->idProvincia;
    }

    /**
     * @return null|string
     */
    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    /**
     * @param null|string $provincia
     * @return Provincias
     */
    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }


}
