<?php

namespace BotellaBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PaintingRepository extends EntityRepository
{
    public function getPaintings($page, $nbPerPage)
    {
        $query = $this->createQueryBuilder('p')
        ->leftJoin('p.image', 'i')
        ->addSelect('i')
        ->leftJoin('p.series', 's')
        ->addSelect('s')
        ->getQuery()
        ;
        $query
        // On définit l'annonce à partir de laquelle commencer la liste
        ->setFirstResult(($page-1) * $nbPerPage)
        // Ainsi que le nombre d'annonce à afficher sur une page
        ->setMaxResults($nbPerPage)
        ;
        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($query, true);
    }

    public function myFindAll()
    {
        $queryBuilder = $this->createQueryBuilder('p');

        $query = $queryBuilder->getQuery();
        $results = $query->getResult();

        return $results;
    }

    public function getArticleWithSeries(array $serieNames)
    {
        $qb = $this->createQueryBuilder('p');

        $qb
        ->innerJoin('p.series', 's')
        ->addSelect('s')
        ;

        $qb->where($qb->expr()->in('s.name', $serieNames));

        return $qb
        ->getQuery()
        ->getResult()
        ;
    }
}
