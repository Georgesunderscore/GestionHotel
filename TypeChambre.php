<?php


class TypeChambre
{
	// chambre simple ou double 2 lit 
	private String $_type;

	

	public function __construct($type)
	{
		$this->_type = $type;
	}


	/**
	 * Get the value of _type
	 */ 
	public function getType()
	{
		return $this->_type;
	}

	/**
	 * Set the value of _type
	 *
	 * @return  self
	 */ 
	public function setType($type)
	{
		$this->_type = $type;

		return $this;
	}

	public function __toString()
	{
		$ecrire = $this->getType();
		echo "<br>";
		return $ecrire;
	}

}