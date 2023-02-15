<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Gestion-Foot</title>
</head>

<body>

	<h1>Exercice Hotel </h1>
	<p>

	</p>
	<h2>Résultat </h2>



	<?php

    //importer tous les classes 
	spl_autoload_register(function ($class_name) {
		require_once $class_name . '.php';
	});

    
	$chambreSimple = new TypeChambre("Simple");
    $chambreDouble = new TypeChambre("Double");
	//($numero , $typeChambre ,$prix )
    
	$hotel1 = new Hotel('Hilton****Strasbourg' , "10 route de la gare " , 30);
    
    $chambre1 = new Chambre(1,$chambreSimple,100.52,$hotel1);
    $chambre2 = new Chambre(1,$chambreDouble,200.104,$hotel1);
	
    $client1 = new Client("Georges");
    $client2 = new Client("Polo");

    
		
	// $_listJoueurAffichage = [];
	
    // $georges = new Joueur("georges", "kayal", "29-02-1986",$nationLB);
	// $_listJoueurAffichage [] = $georges;
	
	
	 $reservation15022023 = new Reservation($hotel, $chambre1,'15-02-2023','16-02-2023'); 
     $reservation15022023 = new Reservation($hotel, $chambre1,'16-02-2023','17-02-2023'); 
	

	 echo "<div> Hotel Details</div>";
	 echo "<div class='container-flex-row'>";
	 	$hotel->getAffichage();
	 echo "</div>";

    // echo "<div> On liste les joueurs de chaque équipe (remarquez que des joueurs apparaissent dans plusieurs équipes à 
    //             des années différentes</div>";

	// echo "<div class='container-flex-row'>";
	// 		$equipeTADAMONSOUR->getListJoueurEquipeAffichage();
	// 		$equipeNEJMI->getListJoueurEquipeAffichage();
	// 		$equipePSG->getListJoueurEquipeAffichage();
	// 		$equipeMU->getListJoueurEquipeAffichage();
	// 		$equipeAlNasser->getListJoueurEquipeAffichage();
			
	// echo "</div>";

	// echo "<div class='container-flex-row'>On liste la carrière d'un joueur</div>";
	// echo "<div class='container-flex-row'>";
	// 	foreach($_listJoueurAffichage as $j){
	// 		$j->getListEquipeJoueurAffichage();
	// 	}
		
			
	// echo "</div>";

	?>
</body>

</html>