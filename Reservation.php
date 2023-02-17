<?php


class Reservation
{
	// déclaration table intermediaire
	   
	private Hotel $_hotel;
    private Chambre $_chambre;
    private Client $_client;    
    private DateTime $_dateDebut;
    private DateTime $_dateFin;
    private int $_nombreJours;
    
    //optionelle
    // private float $_discountRate;
    // private float $_prixReservation;

	public function __construct($chambre,$client ,$dateDebut,$dateFin)
	{
        if ($chambre->getStatusDisponible()){
            $this->_chambre = $chambre;
            $this->_client = $client;
            $this->_dateDebut = new DateTime($dateDebut);
            $this->_dateFin = new DateTime($dateFin);
            $this->_chambre->getHotel()->ajoutListReservation($this); 
            $this->_client->ajoutListReservation($this); 
            $hotel =$chambre->getHotel(); 
            $chambre->getHotel()->setNombreCDisponible($hotel->getNombreCDisponible() - 1);
            $chambre->getHotel()->setNombreCReserver($hotel->getNombreCReserver() + 1);
			$chambre->setStatusDisponible(false);
            echo "Reservation Confirmer";
        }
		else{
			echo "Reservation Failed ! ";
            //stop lexecution
            return;
			
		}  
        
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

    /**
     * Get the value of _chambre
     */ 
    public function getChambre()
    {
        return $this->_chambre;
    }

    /**
     * Set the value of _chambre
     *
     * @return  self
     */ 
    public function setChambre($chambre)
    {
        $this->_chambre = $chambre;

        return $this;
    }

    /**
     * Get the value of _dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->_dateDebut;
    }

    /**
     * Set the value of _dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->_dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of _dateFin
     */ 
    public function getDateFin()
    {
        return $this->_dateFin;
    }

    /**
     * Set the value of _dateFin
     *
     * @return  self
     */ 
    public function setDateFin($dateFin)
    {
        $this->_dateFin = $dateFin;

        return $this;
    }

    /**
     * Get the value of _client
     */ 
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Set the value of _client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->_client = $client;

        return $this;
    }
}