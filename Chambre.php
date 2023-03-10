<?php


class Chambre
{
	// déclaration table intermediaire
	private int $_numero;
    private TypeChambre $_typeChambre;
	private bool $_statusDisponible=true;
	private float $_prix;

	private Hotel $_hotel;

	

	public function __construct($numero , $typeChambre ,$prix , $hotel )
	{
		$this->_numero = $numero;
        $this->_typeChambre = $typeChambre;
		$this->_prix = $prix;
		$this->_hotel = $hotel;
		
		$this->_hotel->ajoutListChambre($this);
		
		
       
	}


	/**
	 * Get the value of _numero
	 */ 
	public function getNumero()
	{
		return $this->_numero;
	}

	/**
	 * Set the value of _numero
	 *
	 * @return  self
	 */ 
	public function setNumero($numero)
	{
		$this->_numero = $numero;

		return $this;
	}

	public function __toString()
	{
		$ecrire = $this->getNumero() ;
		return $ecrire;
	}


    /**
     * Get the value of _typeChambre
     */ 
    public function getTypeChambre()
    {
        return $this->_typeChambre;
    }

    /**
     * Set the value of _typeChambre
     *
     * @return  self
     */ 
    public function setTypeChambre($typeChambre)
    {
        $this->_typeChambre = $typeChambre;

        return $this;
    }

	/**
	 * Get the value of _status
	 */ 
	public function getStatusDisponible()
	{
		return $this->_statusDisponible;
	}

	/**
	 * Set the value of _status
	 *
	 * @return  self
	 */ 
	public function setStatusDisponible($statusDisponible)
	{
		$this->_statusDisponible = $statusDisponible;

		return $this;
	}

	/**
	 * Get the value of _prix
	 */ 
	public function getPrix()
	{
		return $this->_prix;
	}

	/**
	 * Set the value of _prix
	 *
	 * @return  self
	 */ 
	public function setPrix($prix)
	{
		$this->_prix = $prix;
		return $this;
	}

	/**
	 * Get the value of _hotel
	 */ 
	public function getHotel()
	{
		return $this->_hotel;
	}

	/**
	 * Set the value of _hotel
	 *
	 * @return  self
	 */ 
	public function setHotel($hotel)
	{
		$this->_hotel = $hotel;

		return $this;
	}
}