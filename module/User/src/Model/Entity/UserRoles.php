<?php

namespace User\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoles
 *
 * @ORM\Table(name="user_roles")
 * @ORM\Entity
 */
class UserRoles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=true)
     */
    private $role;



		public function exchangeArray( array $data )
		{
			$this->uid = !isset( $data[ "uid" ] ) ?
				$data[ "uid" ] : null;

			$this->role = !isset( $data[ "role" ] ) ? 
				$data[ "role" ] : null;
		}

		public function getArrayCopy()
		{
			return get_object_vars( $this );
		}

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return UserRoles
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
