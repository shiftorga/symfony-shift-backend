<?php

namespace Engel\Bundle\AppBundle\Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class ShiftsRepository extends EntityRepository
{
    public function findShifts($start, $end, $locationIds)
    {
        $qb = $this->createQueryBuilder('shift');
        $andDate = $qb->expr()->andX();
        $andDate->add($qb->expr()->gt('shift.start', $start));
        $andDate->add($qb->expr()->lt('shift.end', $end));
        $qb->where($andDate);

        return $qb->getQuery()->getResult();
    }
}
