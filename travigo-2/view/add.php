<?php

include "../controller/add-tour_class.php";
$tour = new tour;
$tour->session();
if(isset($_POST['Ajouter'])){

    $tour->get_data($_POST,$_FILES);

}

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
            <input type="text" name="place">
            <label>price</label>
            <input type="number" name="price">
            <label>form</label>
            <input type="number" name="from">
            <label>until</label>
            <input type="number" name="until">
            <label>image</label>
            <input type="file" name="img">
            <input type="submit" value="Ajouter" name="Ajouter">
            
        </form>
    </div>
</body>
</html>








