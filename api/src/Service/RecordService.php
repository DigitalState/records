<?php

namespace App\Service;

use App\Entity\Record;
use Doctrine\ORM\EntityManager;
use Ds\Component\Entity\Service\EntityService;

/**
 * Class RecordService
 */
final class RecordService extends EntityService
{
    /**
     * Constructor
     *
     * @param \Doctrine\ORM\EntityManager $manager
     * @param string $entity
     */
    public function __construct(EntityManager $manager, $entity = Record::class)
    {
        parent::__construct($manager, $entity);
    }
}
