<?php

namespace User\Model\TableGateway;

use 
	RuntimeException,
	Zend\Paginator\Paginator,
	User\Model\Entity\UserCredentials as UserCredentialsEntity,
	Zend\Paginator\Adapter\DbTableGateway as PaginationAdapterTableGateway,
	Zend\Db\TableGateway\TableGatewayInterface,
	Zend\Debug\Debug;

class UserCredentialsTableGateway
{

	private 
		$paginator,
		$tableGateway;

	public function __construct( 
		TableGatewayInterface $tableGateway,
		Paginator $paginator = null
	)
	{
		$this->tableGateway = $tableGateway;
		$this->paginator = $paginator;
	}

	public function fetchAll( $pagenated = true )
	{
		if( ! $pagenated ) 
			return $this->tableGateway->select();

		return $this->fetchPaginatedResult();
	}

	public function fetchPginatedResult()
	{
		$paginationAdapter = 
			new PaginationAdapterTableGateway( 
				$this->tableGateway
			);

		$paginator = new Paginator( 
			$paginationAdapter
		);

		return $paginator;
	}

	public function getUser( int $id )
	{
		$rowset = $this->tableGateway->select( [ 
			"id" => ( int ) $id,
		] );

		$row = $rowset->current();

		if( ! $row )
			throw new RuntimeException( 
				sprint( "Could not find row #%d", $id ) 
			);

		return $row;
	}

	public function saveUser( UserCredentialsEntity $user )
	{
		$data = [ 
			"email" => $user->getEmail(),
			"passwd" => $user->getPasswd(),
			"active" => $user->getActive(),
			"date" => $user->getDate(),
		];

		$id = ( int ) $user->getId();

		if( $id === 0 )
			return $this->tableGateway->insert( $data );

		if( ! $this->getUser( $id ) )
			return new RuntimeException( 
				sptintf( "Cannot update user #%d: does not exists", $id ) 
			);

		$this->tableGateway->update( 
			$data,
			[ "id" => $id ]
		);
	}

	public function deleteUser( int $id )
	{
		return $this->tableGateway->delete( [ 
			"id" => $id
		] );
	}

}
