<?php 
	include '../config.php';
	include_once '../model/evenements.php';

	// récupere tous les evenements
	function getAllevents() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from evenements';
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un evenement
			function createevent($evenements) {
					$nom_event=$evenements->getnom_event();
					$lieu=$evenements->getlieu();
					$date=$evenements->getdate();
					$nb_places=$evenements->getnb_places();
                    $description=$evenements->getdescription();
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO evenements (nom_event,lieu,date,nb_places,description) 
					VALUES ('$nom_event', '$lieu', '$date', '$nb_places', '$description')";
			$con->exec($sql);
			session_start();
			$_SESSION['valide']=true;
			$_SESSION['nom_event']=$nom_event;
			header('Location:../view/showevenements.php');      
		}
	    catch(PDOException $e) { 
			echo " <script>    var txt;
			var r = confirm('Ops ce nom d evenement est utilisé par un autre artiste essaie encore!');
		   if (r == true) { 			window.location.replace('../view/evenements.php');

		   } else {
			window.location.replace('../view/404.php');
		}</script>";
	
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

    //recupere un user
	function readevent($nom_event) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from evenements where nom_event = '$nom_event' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
	}

    //met à jour l'evenement , on va cloturer avec la limite de places 

    // suprime un evenement : pour la suppression, on va archiver les evenements passés 
