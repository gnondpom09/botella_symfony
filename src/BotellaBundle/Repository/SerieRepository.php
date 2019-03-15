<?php

namespace BotellaBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class SerieRepository extends EntityRepository
{
    public function getLikeQueryBuilder()
    {
      return $this
        ->createQueryBuilder('s');
    }

    public function myFindAll()
    {
        $queryBuilder = $this->createQueryBuilder('s');

        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        // On retourne ces résultats
        return $results;
    }
}
