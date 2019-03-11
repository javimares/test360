<?php
/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 10/03/2019
 * Time: 22:23
 */

namespace App\Service;


use App\Entity\Municipios;
use App\Repository\MunicipiosRepository;
use App\Repository\ProvinciasRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Log\Logger;

class MunicipioServices
{
    /**
     * @var Logger
     */
    private $logger;
    /**
     * @var MunicipiosRepository
     */
    private $municipiosRepository;
    /**
     * @var ProvinciasRepository
     */
    private $provinciasRepository;


    /**
     * MunicipioServices constructor.
     * @param ServiceEntityRepository $municipiosRepository
     * @param ServiceEntityRepository $provinciasRepository
     * @param LoggerInterface $logger
     */
    public function __construct(
        ServiceEntityRepository $municipiosRepository,
        ServiceEntityRepository $provinciasRepository,
        LoggerInterface  $logger
    )
    {
        $this->logger = $logger;
        $this->municipiosRepository = $municipiosRepository;
        $this->provinciasRepository = $provinciasRepository;
    }

    /**
     * @param string $nombreDeProvincia
     * @return Municipios[]|array
     */
    public function getAllByNombreDeProvincia(string $nombreDeProvincia): array
    {
        $municipios = [];
        try{
            $provincia = $this->provinciasRepository->findOneBy(['provincia' => $nombreDeProvincia]);
            if (!$provincia) {
                throw new \Exception(sprintf('No existe la provincia s%', $nombreDeProvincia));
            }
            $municipios = $this->municipiosRepository->findByProvincia($provincia->getIdProvincia());
        }
        catch(\Exception $e){
            $this->logger->error($e->getMessage());
        }

        return $municipios;
    }
}