<?php
    require("database.php");

    $case_id = $_POST['case_id']; // récupère l'id
    $case_titre = $_POST['case_titre'];
    $case_description = $_POST['case_description'];
    $case_date = $_POST['case_date'];
    $case_image = $_POST['case_image'];
    
    $requete="INSERT INTO Works (id, titre, description, date, image) VALUES ('$case_id', '$case_titre', '$case_description', '$case_date', '$case_image')";
    $query = $db->prepare($requete);
    $query->execute();

    if($requete)
    {
        echo("ajout fait avec succes");
    }
    else{
        echo("Erreur");
    }
?>