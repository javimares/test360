<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipios
 *
 * @ORM\Table(name="municipios")
 * @ORM\Entity(repositoryClass="App\Repository\MunicipiosRepository")
 */
class Municipios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_municipio", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMunicipio;

    /**
     * @var int
     *
     * @ORM\Column(name="id_provincia", type="smallint", nullable=false)
     */
    private $idProvincia;

    /**
     * @var int
     *
     * @ORM\Column(name="cod_municipio", type="integer", nullable=false, options={"comment"="Código de muncipio DENTRO de la provincia, campo no único"})
     */
    private $codMunicipio;

    /**
     * @var int
     *
     * @ORM\Column(name="DC", type="integer", nullable=false, options={"comment"="Digito Control. El INE no revela cómo se calcula, secreto nuclear."})
     */
    private $dc;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre = '';

    /**
     * @return int|null
     */
    public function getIdMunicipio(): ?int
    {
        return $this->idMunicipio;
    }

    /**
     * @return int|null
     */
    public function getIdProvincia(): ?int
    {
        return $this->idProvincia;
    }

    /**
     * @param int $idProvincia
     * @return Municipios
     */
    public function setIdProvincia(int $idProvincia): self
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodMunicipio(): ?int
    {
        return $this->codMunicipio;
    }

    /**
     * @param int $codMunicipio
     * @return Municipios
     */
    public function setCodMunicipio(int $codMunicipio): self
    {
        $this->codMunicipio = $codMunicipio;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDc(): ?int
    {
        return $this->dc;
    }

    /**
     * @param int $dc
     * @return Municipios
     */
    public function setDc(int $dc): self
    {
        $this->dc = $dc;

        return $this;
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
     * @return Municipios
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


}
