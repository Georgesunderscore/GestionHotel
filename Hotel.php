<?php


class Hotel
{
	// déclaration table intermediaire
	private String $_nom;
    private String $_address;
    private String $_nombreChambres;
    private String $_nombreCReserver;
    private String $_nombreCDisponible;
    //relation
    private array $_listDesChambres;

    private array $_listDesReservation;

    


	

	public function __construct($nom)
	{
		$this->_nom = $nom;
	}

	/**
	 * Get the value of _nom
	 */ 
	public function getNom()
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


    /**
     * Get the value of _address
     */ 
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * Set the value of _address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->_address = $address;

        return $this;
    }

    /**
     * Get the value of _nombreChambres
     */ 
    public function getNombreChambres()
    {
        return $this->_nombreChambres;
    }

    /**
     * Set the value of _nombreChambres
     *
     * @return  self
     */ 
    public function setNombreChambres($_nombreChambres)
    {
        $this->_nombreChambres = $_nombreChambres;

        return $this;
    }

    /**
     * Get the value of _nombreCReserver
     */ 
    public function getNombreCReserver()
    {
        return $this->_nombreCReserver;
    }

    /**
     * Set the value of _nombreCReserver
     *
     * @return  self
     */ 
    public function setNombreCReserver($_nombreCReserver)
    {
        $this->_nombreCReserver = $_nombreCReserver;

        return $this;
    }

    /**
     * Get the value of _nombreCDisponible
     */ 
    public function getNombreCDisponible()
    {
        return $this->_nombreCDisponible;
    }

    /**
     * Set the value of _nombreCDisponible
     *
     * @return  self
     */ 
    public function setNombreCDisponible($_nombreCDisponible)
    {
        $this->_nombreCDisponible = $_nombreCDisponible;

        return $this;
    }

    /**
     * Get the value of _listDesChambres
     */ 
    public function getListDesChambres()
    {
        return $this->_listDesChambres;
    }

    /**
     * Set the value of _listDesChambres
     *
     * @return  self
     */ 
    public function setListDesChambres($listDesChambres)
    {
        $this->_listDesChambres = $listDesChambres;

        return $this;
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


    public function ajoutListChambre(Chambre $c)
    {   
        $this->_listDesChambres [] = $c;
        return $this->_listDesChambres;
    }


    public function ajoutListReservation(Reservation $r)
    {   
        $this->_listDesReservation [] = $r;
        return $this->_listDesReservation;
    }
}