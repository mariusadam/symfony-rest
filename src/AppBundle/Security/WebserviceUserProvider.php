<?php

namespace AppBundle\Security;

use AppBundle\Entity\WebserviceUser;
use AppBundle\Repository\WebserviceUserRepository;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class WebserviceUserProvider implements UserProviderInterface
{
    /**
     * @var WebserviceUserRepository
     */
    private $webserviceUserRepo;

    public function __construct(WebserviceUserRepository $webserviceUserRepository)
    {
        $this->webserviceUserRepo = $webserviceUserRepository;
    }

    public function loadUserByUsername($apiKey)
    {
        return $this->webserviceUserRepo->loadUserByUsername($apiKey);
    }

    public function refreshUser(UserInterface $user)
    {
        // this is used for storing authentication in the session
        // but in this example, the token is sent in each request,
        // so authentication can be stateless. Throwing this exception
        // is proper to make things stateless
        throw new UnsupportedUserException();
    }

    public function supportsClass($class)
    {
        return WebserviceUser::class === $class;
    }
}