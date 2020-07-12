<?php


namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function getProductsByCategoryId($id)
    {

        $qb = $this->createQueryBuilder('p')
            ->join('p.category', 'c')
            ->where('c.id = :id')
            ->setParameter('id', $id)
            ->getQuery();
        return $qb->execute();
    }

}