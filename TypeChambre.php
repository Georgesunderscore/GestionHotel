<?php


class TypeChambre
{
	// chambre simple ou double 2 lit 
	private String $_type;
	private String $_wifi="non";


	

	public function __construct($type,$wifi)
	{
		$this->_type = $type;
		$this->_wifi = $wifi;
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
		return $ecrire;
	}


	/**
	 * Get the value of _wifi
	 */ 
	public function getWifi()
	{
		return $this->_wifi;
	}

	/**
	 * Set the value of _wifi
	 *
	 * @return  self
	 */ 
	public function setWifi($wifi)
	{
		$this->_wifi = $wifi;

		return $this;
	}
}