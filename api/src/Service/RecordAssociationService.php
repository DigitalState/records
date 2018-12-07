<?php

namespace App\Service;

use App\Entity\RecordAssociation;
use Doctrine\ORM\EntityManager;
use Ds\Component\Entity\Service\EntityService;

/**
 * Class RecordAssociationService
 */
final class RecordAssociationService extends EntityService
{
    /**
     * Constructor
     *
     * @param \Doctrine\ORM\EntityManager $manager
     * @param string $entity
     */
    public function __construct(EntityManager $manager, $entity = RecordAssociation::class)
    {
        parent::__construct($manager, $entity);
    }
}
