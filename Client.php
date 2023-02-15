<?php


class Client
{
	// déclaration table intermediaire
	private String $_nom;

	private array $_listDesReservation;

    
	public function __construct($nom)
	{
		$this->_nom = $nom;
	}


	/**
	 * Get the value of _nom
	 */ 
	public function getNom():string
	{
		return $this->_nom;
	}

	/**
	 * Set the value of _nom
	 *
	 * @return  self
	 */ 
	public function setNom($nom)
	{
		$this->_nom = $nom;

		return $this;
	}

	public function __toString()
	{
		$ecrire = $this->getNom();
		echo "<br>";
		return $ecrire;
	}

	
    public function ajoutListReservation(Reservation $r)
    {   
        $this->_listDesReservation [] = $r;
        return $this->_listDesReservation;
    }



	/**
	 * Get the value of _listDesReservation
	 */ 
	public function getListDesReservation()
	{
		return $this->_listDesReservation;
	}

	/**
	 * Set the value of _listDesReservation
	 *
	 * @return  self
	 */ 
	public function setListDesReservation($listDesReservation)
	{
		$this->_listDesReservation = $listDesReservation;

		return $this;
	}
}