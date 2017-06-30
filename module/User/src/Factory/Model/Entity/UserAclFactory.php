<?php

namespace User\Factory\Model\Entity;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use User\Model\Entity\UserAcl;

class UserAclFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return UserAcl
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new UserAcl();
    }
}
