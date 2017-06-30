<?php

namespace User\Model\Entity;

use 
	Zend\Debug\Debug;

class UserCredentialsEntity
{
	private 
		$id,
		$email,
		$passwd,
		$active,
		$date;

	public function exchangeArray( array $data )
	{
		$this->id = !empty( $data[ "id" ] ) ?
			$data[ "id" ] : null;
		$this->email = !empty( $data[ "email" ] ) ? 
			$data[ "email" ] : null;
		$this->passwd = !empty( $data[ "passwd" ] ) ? 
			$data[ "passwd" ] : null;
		$this->active = !empty( $data[ "active" ] ) ? 
			$data[ "active" ] : null;
		$this->date = !empty( $data[ "date" ] ) ? 
			$data[ "date" ] : null;
	}

	public function getArrayCopy()
	{
		return [
			"id" => $this->id,
			"email" => $this->email,
			"passwd" => $this->passwd,
			"active" => $this->active,
			"date" => $this->date
		];
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId( int $id )
	{
		$this->id = $id;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail( string $email )
	{
		$this->email = $email;
		return $this;
	}

	public function getPasswd()
	{
		return $this->passwd;
	}

	public function setPasswd( $passwd )
	{
		$this->passwd = $passwd;
		return $this;
	}

	public function getActive()
	{
		return $this->active;
	}

	public function setActive( bool $active )
	{
		$this->active = $active;
		return $this;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate( $date )
	{
		$this->date = $date;
		return $this;
	}
}

