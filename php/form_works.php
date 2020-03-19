<?php
    require("database.php");

	if(isset($_POST['Bouton'])) { // Test si le bouton contient des informations
		$case_id = $_POST['case_id']; // récupère l'id
		$case_titre = $_POST['case_titre'];
		$case_description = $_POST['case_description'];
		$case_date = $_POST['case_date'];
		$case_image = $_POST['case_image'];
		
		$requete="INSERT INTO Works VALUES ('$case_id', '$case_titre', '$case_description', '$case_date', '$case_image')";
		$query = $db->query($requete);
		header('Location: ../index.php'); // permet de revenir à l'index une fois l'update réalisé
	}
    else{
        echo("Erreur");
    }
?>


<h1>Ajouter un travail</h1><br>

<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->

			<div>
				<label for="case_id" >Id du travail</label> : 
			</div>
			<input class="form-control" type="text" name="case_id" id="case_id" /></input>
			<br />

            <div>
				<label for="case_titre" >Titre du travail</label> : 
			</div>
			<input class="form-control" type="text" name="case_titre" id="case_titre" /></input>
			<br />

            <div>
				<label for="case_description" >Description du travail</label> : 
			</div>
			<input class="form-control" type="text" name="case_description" id="case_description" /></input>
			<br />

            <div>
				<label for="case_date" >Date du travail</label> : 
			</div>
			<input class="form-control" type="date" name="case_date" id="case_date" /></input>
			<br />

            <div>
				<label for="case_image" >Image du travail</label> : 
			</div>
			<input class="form-control" type="text" name="case_image" id="case_image" /></input>
			<br />

            <input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton" name="Bouton" value="OK"/>

</form>





