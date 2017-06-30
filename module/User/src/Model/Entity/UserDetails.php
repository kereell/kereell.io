<?php

namespace User\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDetails
 *
 * @ORM\Table(name="user_details", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class UserDetails
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
     * @ORM\Column(name="firstname", type="string", length=60, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=60, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true)
     */
    private $gender = '-1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=60, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=60, nullable=true)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="bigint", nullable=false)
     */
    private $uid;



		public function exchangeArray( array $data )
		{
			$this->id = 
				!isset( $data[ "id" ] ) ? 
					$data[ "id" ] : null;

			$this->firstname = 
				!isset( $data[ "firstname" ] ) ? 
					$data[ "firstname" ] : null;

			$this->lastname = 
				!isset( $data[ "lastname" ] ) ?
					$data[ "lastname" ] : null;

			$this->email = 
				!isset( $data[ "email" ] ) ? 
					$data[ "email" ] : null;

			$this->gender = 
				!isset( $data[ "gender" ] ) ?
					$data[ "gender" ] : null;

			$this->birthdate = 
				!isset( $data[ "birthdate" ] ) ? 
					$data[ "birthdate" ] : null;

			$this->phone = 
				!isset( $data[ "phone" ] ) ? 
					$data[ "phone" ] : null;

			$this->city = 
				!isset( $data[ "city" ] ) ? 
					$data[ "city" ] : null;

			$this->country = 
				!isset( $data[ "country" ] ) ? 
					$data[ "country" ] : null;

			$this->uid = 
				!isset( $data[ "uid" ] ) ? 
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return UserDetails
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return UserDetails
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserDetails
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
     * Set gender
     *
     * @param boolean $gender
     *
     * @return UserDetails
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return UserDetails
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return UserDetails
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return UserDetails
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return UserDetails
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return UserDetails
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
