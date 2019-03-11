<?php

namespace App\Repository;

use App\Entity\Municipios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Municipios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Municipios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Municipios[]    findAll()
 * @method Municipios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MunicipiosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Municipios::class);
    }

    /**
     * @param $idProvincia
     * @return Municipios[] Returns an array of Municipios objects
     */

    public function findByProvincia(int $idProvincia)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.idProvincia = :val')
            ->setParameter('val', $idProvincia)
            ->getQuery()
            ->getArrayResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Municipios
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
