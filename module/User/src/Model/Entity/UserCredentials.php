<?php

namespace User\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserCredentials
 *
 * @ORM\Table(name="user_credentials", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"}), @ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity
 */
class UserCredentials
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true)
     */
    private $passwd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';



		public function exchangeArray( array $array )
		{
			$this->id = !isset( $data[ "id" ] ) ?
				$data[ "id" ] : null;

			$this->email = !isset( $data[ "email" ] ) ?
				$data[ "email" ] : null;

			$this->passwd = !isset( $data[ "passwd" ] ) ?
				$data[ "passwd" ] : null;

			$this->active = !isset( $data[ "active" ] ) ? 
				$data[ "active" ] : null;

			$this->data = !isset( $data[ "data" ] ) ? 
				$data[ "active" ] : null;
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
     * Set email
     *
     * @param string $email
     *
     * @return UserCredentials
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     *
     * @return UserCredentials
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return UserCredentials
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UserCredentials
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
