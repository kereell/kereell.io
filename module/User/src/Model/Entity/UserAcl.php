<?php

namespace User\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAcl
 *
 * @ORM\Table(name="user_acl", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class UserAcl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="role", type="boolean", nullable=true)
     */
    private $role;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm", type="string", length=255, nullable=true)
     */
    private $confirm;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="bigint", nullable=false)
     */
    private $uid;



		public function exchangeArray()
		{
			$this->id = isset( $data[ "id" ] ) ? 
				$data[ "id" ] : null;

			$this->role = isset( $data[ "role" ] ) ?
				$data[ "role" ] : null;

			$this->active = isset( $data[ "active" ] ) ?
				$data[ "active" ] : null;

			$this->confirm = isset( $data[ "confirm" ] ) ?
				$data[ "confirm" ] : null;

			$this->uid = isset( $data[ "uid" ] ) ? 
				$data[ "uid" ] : null;
		}

		public function getArrayCopy()
		{
			return get_object_vars( $this );
		}

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set role
     *
     * @param boolean $role
     *
     * @return UserAcl
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return boolean
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return UserAcl
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set confirm
     *
     * @param string $confirm
     *
     * @return UserAcl
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;

        return $this;
    }

    /**
     * Get confirm
     *
     * @return string
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return UserAcl
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
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
}
