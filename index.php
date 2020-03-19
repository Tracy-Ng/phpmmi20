<!DOCTYPE html>

<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>

    <!--Bootstrap links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Bootstrap links -->


</head>
<body>
    <header>

    <a href="login.php">connexion</a>
    <a href="logout.php">déconnexion</a>
    <a href="php/form_works.php">Ajouter un travail</a>

    </header>

    <p>Bonjour <?php if(isset($_SESSION["account"]["username"]))
    {
        echo($_SESSION["account"]["username"]);
    }
    else
    {
        echo "NOT CONNECTED";
    }
        ?></p>

    <br>
    <?php
        $allworks = $work->get_works();
        foreach($allworks as $w)


    ?>

    <h1>Titre<?=$w["title"]?></h1>
    
    <h2>Date <?=$w["date"]?></h2>
    <p><?=$w["description"]?></p>
    <p><img src='<?php echo $Works->image->url ?>'></p>
    <img class="img-fluid" width="100%" src='<?php echo $w["image"] ?>'>
    


    

</body>
</html>