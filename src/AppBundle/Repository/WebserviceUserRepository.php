<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * WebserviceUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WebserviceUserRepository extends EntityRepository implements UserLoaderInterface
{
    public function loadUserByUsername($apiKey)
    {
        return $this->createQueryBuilder('u')
            ->where('u.apiKey = :key')
            ->setParameter('key', $apiKey)
            ->getQuery()
            ->getOneOrNullResult();
    }
}