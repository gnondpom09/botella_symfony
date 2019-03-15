<?php

namespace BotellaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function getLikeQueryBuilder()
    {
      return $this
        ->createQueryBuilder('c');
    }
}
