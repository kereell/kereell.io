<?php

namespace User\Factory\Model\Entity;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use User\Model\Entity\UserRoles;

class UserRolesFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return UserRoles
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new UserRoles();
    }
}
