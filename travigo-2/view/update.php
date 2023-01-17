<?php

include "../controller/update-class.php";
include "../controller/add-tour_class.php";

$update = new update;
$update->getId($_GET);
$update->session();


if(isset($_POST['Ajouter'])){


    $update->update_date($_POST,$_FILES);
}
$data = $update->show_value();

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="form">
        <a href="dashbord.php" class="back_btn"><img src="img/back.png"> Retour</a>
        
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
        <?php if(isset($message)){
            echo $message;
        } ?>
        </p>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>place</label>
            <input type="text" name="place" value="<?= $data["place"] ?>">
            <label>price</label>
            <input type="number" name="price" value="<?= $data["price"] ?>">
            <label>form</label>
            <input type="number" name="from" value="<?= $data["fromm"] ?>">
            <label>until</label>
            <input type="number" name="until" value="<?= $data["until"] ?>">
            <label>image</label>
            <input type="file" name="img">
            <input type="submit" value="Ajouter" name="Ajouter">
            
        </form>
    </div>
</body>
</html>
