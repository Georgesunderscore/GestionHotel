<?php


class Client
{
	// déclaration table intermediaire
	private String $_nom;
	private String $_prenom;

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
	//getAffichage
    public function getAffichageReservations(){
		$total =0;
        echo "<div class='container-flex-row'>";
            echo "<div class='box'>" .' Reservation de  '.  "$this";
                echo "<div class='boxChild'>";
                if(!empty($this->_listDesReservation)){
                    echo "<p class='boxGreen'>".  count($this->_listDesReservation) ." Reservations </p>";
                    foreach($this->_listDesReservation as $reservation ){

						$x = "- (". ($reservation->getChambre()->getTypeChambre()=='Simple') ? "<span>1 Lit</span>":"<span>2 Lits</span>" ;
                        $total = $total +  $reservation->getNombreJours() * $reservation->getChambre()->getPrix() ; 
						echo "<p>".  $reservation->getChambre()->getHotel() . ' / Chambre ' . $reservation->getChambre()
                                //.' - (' . $reservation->getChambre()->getTypeChambre() . '  ' 
                                .' - (' . $x . '  ' 
								.' - ' . $reservation->getChambre()->getPrix(). ' € ' 
								.' - Wifi ' . $reservation->getChambre()->getTypeChambre()->getWifi(). ')' 
                                // .'-' . $reservation->getDateDebut()->format('Y-m-d H:i:s')
                                // . 'au' . $reservation->getDateFin()->format('Y-m-d H:i:s') .
                                .' - du ' . $reservation->getDateDebut()->format('d-m-Y') 
                                . ' au ' . $reservation->getDateFin()->format('d-m-Y') 
                               // . ' Nbr des Jours ' . $reservation->getNombreJours() 
                                . "</p>";
                            }
                }
                else{
                    echo "<p class='boxGreen'> Aucune Réservations! </p>";
                    

                }
					echo "<div class='box'>Total : ";
					echo "<span > " .  $total . " € </span>"; 

					echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        }
    
}