<?php


class Hotel
{
	// déclaration table intermediaire
	private String $_nom;
    private String $_address;
    private int $_nombreChambres;
    private int $_nombreCReserver;
    private int $_nombreCDisponible;
    //relation
    private array $_listDesChambres;

    private array $_listDesReservation;

    


	

	public function __construct($nom,$address,$nombreChambres)
	{
		$this->_nom = $nom;
		$this->_address = $address;
        $this->_nombreChambres = $nombreChambres;
        $this->_nombreCDisponible = $nombreChambres;
        $this->_nombreCReserver =  0;
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

    //getAffichage
    public function getAffichage(){
    echo "<div class='box boxBlue'>  $this";
        echo "<div class='boxChild boxBlue'>";
        echo "<p>".  $this->_address."</p>";
        echo "<p> Nombre de Chambres ".  $this->_nombreChambres."</p>";
        echo "<p> Nombre de Chambres Réserver ".  $this->getNombreCReserver()."</p>";
        echo "<p> Nombre de Chambres Disponible".  $this->getNombreCDisponible()."</p>";
        echo "</div>";
    echo "</div>";
    }
    //getAffichage
    public function getAffichageReservations(){
        echo "<div class='box boxBlue' Reservation de l'hotel >  $this";
            echo "<div class='boxChild boxBlue'>";
            echo "<p>".  count($this->_listDesReservation) ." Reservations </p>";
            foreach($this->_listDesReservation as $reservation ){
                		echo "<p>".  $reservation->getClient() . '-' . $reservation->getChambre()
                        // .'-' . $reservation->getDateDebut()->format('Y-m-d H:i:s')
                        // . 'au' . $reservation->getDateFin()->format('Y-m-d H:i:s') .
                        .'-' . $reservation->getDateDebut()->format('Y-m-d')
                        . 'au' . $reservation->getDateFin()->format('Y-m-d') .
                        "</p>";
                	}
            echo "</div>";
        echo "</div>";
        }
    
	// public function getListEquipeJoueurAffichage(){
	// 	echo "<div class='box boxBlue'>  $this";
	// 	echo "<div class='boxChild boxBlue'>";
	// 	if(!empty($this->_listSaison) )
	// 	foreach($this->_listSaison as $saison ){
	// 		echo "<p>".  $saison->getEquipe() . ' ' . $saison->getEquipe()->getYear() ."</p>";
	// 	}
	// 	echo "</div>";
	// 	echo "</div>";
	// }


}