<?php


class Hotel
{
	// déclaration table intermediaire
	private String $_nom;
    private String $_address;
    //relation
    private array $_listDesChambres;

    private array $_listDesReservation;

    


	

	public function __construct($nom,$address,$nombreChambres)
	{
		$this->_nom = $nom;
		$this->_address = $address;
        $this->_nombreChambres = $nombreChambres;
        $this->_listDesReservation = []; 
        $this->_listDesChambres = []; 
         
        
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
     * Get the value of _nombreCReserver
     */ 
    public function getNombreCReserver()
    {
         
        $nbReservations = count($this->_listDesReservation) ;
        return $nbReservations;
    }

    /**
     * Get the value of _nombreCDisponible
     */ 
    public function getNombreCDisponible()
    {
        $nbChambres = count($this->_listDesChambres);
        $nbDispo = $nbChambres - count($this->_listDesReservation);
        return $nbDispo;
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
        echo"ajout a la list des reservations";
        return $this->_listDesReservation;
    }
    
    //getAffichage
    public function getAffichage(){
    echo "<div class='container-flex-row'>";
    echo "<div class='box boxBlue'>  $this";
    echo "<div class='boxChild boxBlue'>";
            echo "<p>".  $this->_address."</p>";
            echo "<p> Nombre de Chambres ".  count($this->_listDesChambres)."</p>";
            echo "<p> Nombre de Chambres Réserver ".  $this->getNombreCReserver()."</p>";
            echo "<p> Nombre de Chambres Disponible ".  $this->getNombreCDisponible()."</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        //getAffichage
        public function getAffichageReservations(){
        echo "<div class='container-flex-row'>";
            echo "<div class='box'>" .' Reservation de l\'hotel '.  "$this";
                echo "<div class='boxChild'>";
                if(!empty($this->_listDesReservation)){
                    echo "<p class='boxGreen'>".  count($this->_listDesReservation) ." Reservations </p>";
                    foreach($this->_listDesReservation as $reservation ){
                                echo "<p>".  $reservation->getClient() . ' - Chambre ' . $reservation->getChambre()
                                // .'-' . $reservation->getDateDebut()->format('Y-m-d H:i:s')
                                // . 'au' . $reservation->getDateFin()->format('Y-m-d H:i:s') .
                                .' - ' . $reservation->getDateDebut()->format('d-m-Y') 
                                . ' au ' . $reservation->getDateFin()->format('d-m-Y') 
                               // . ' Nbr des Jours ' . $reservation->getNombreJours() 
                                . "</p>";
                            }
                }
                else{
                    echo "<p class='boxGreen'> Aucune Réservations! </p>";
                }
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
    

    //getAffichage
    public function getAffichageChambreStatus(){
        echo "<div class='container-flex-row'>";
            echo "<div class='box'>" .' Status des chambres de l\'hotel '.  "$this";
                echo "<div class='boxChild'>";
            if(!empty($this->_listDesReservation)){
                //tabel header 
                echo"<table>";
                echo"<thead>";
                echo"<tr>";
                            echo"<th >CHAMBRE</th>";
                            echo"<th >PRIX</th>";
                            echo"<th >WIFI</th>";
                            echo"<th >ETAT</th>";
                        echo"</tr>";
                    echo"</thead>";
                    echo"<tbody>";

                    foreach($this->_listDesChambres as $chambre ){
                        $status = ($chambre->getStatusDisponible())?"Dispo":"Reservée";
                        $classColor = ($chambre->getStatusDisponible())? "boxGreen":"boxRed";
                        echo"<tr>";
                            echo"<td>". $chambre  . "</td>";
                            echo"<td>". $chambre->getPrix()  . "</td>";
                            echo"<td>". $chambre->getTypeChambre()->getWifi()  . "</td>";
                            echo"<td class=".$classColor .">".   $status. "</td>";
                        echo"</tr>";
                        
                        "</p>";
                    }
                    echo"</tbody>";
                echo"</table>";
                    }
            else{
                echo "<p class='boxGreen'> Aucune Réservations Tous les chambres sont disponible! </p>";
                
                
            }
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
}