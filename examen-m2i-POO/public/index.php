<?php  require '../config/database.php';
       require '../config/fonctions.php';
       require 'Stagiaire.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen m2i</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h1 class="text-primary my-5 text-center">Tout les les stagiaires</h1>




    <div class="container">
        <?php
            foreach (getStagiers() as $stagier){
        ?>

        <h1> <?php
            echo $stagier['id'] .' - ' . $stagier['name'].' - ' . $stagier['created_at'].' - ' .$stagier['phone'].' - ' .$stagier['birthday']
            ?> </h1> <br/>

        <?php
            }


       //spl_autoload_register();
        $stagiaire = new Stagiaire('Alain','20-02-2003','068444447444','13/12/2000');
        echo '<h1>'.$stagiaire->getName().' - ' .$stagiaire->getCreatedAt().' - ' .$stagiaire->getPhone().' - ' .$stagiaire->getBirthday().'</h1>'.'<br/>';
        ?>

    </div>

</body>