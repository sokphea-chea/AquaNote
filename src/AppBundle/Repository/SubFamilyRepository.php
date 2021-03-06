<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SubFamilyRepository extends EntityRepository
{

    /**
     * @return Genus[]
     */
    public function createAlphabeticalQueryBuilder(){
        return $this->createQueryBuilder('sub_family')
                    ->orderBy('sub_family.name', 'ASC');
    }

    /**
     * Helper method to return ANY SubFamily.
     *
     * This is mostly useful when playing and testing things.
     *
     * @return SubFamily
     */
    public function findAny()
    {
        return $this->createQueryBuilder('sub_family')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

}
