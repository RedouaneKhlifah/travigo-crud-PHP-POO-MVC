
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="container">
        <a href="index.php" id="back_site" class="back_btn"><img src="img/back.png"> Back to Site</a>
        <br>
        <a href="add.php" class="Btn_add"> <img src="img/plus.png">Add </a>
        
        <table>
            <tr id="items" class="border_items">
                <th>place</th>
                <th>price</th>
                <th>time</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?php 
            // include_once "conn.php";
            // $sql  = "SELECT * from emplois ";
            // $req = mysqli_query($conn,$sql);

            
            include "../controller/display_class.php";

            $display = new display;
            $display->session();
            $datas = $display->show();


                
                foreach($datas as $data ){

                    ?>
                    <tr id="items">
                        <td><?= $data["place"] ?></td>
                        <td><?= $data["price"]."$" ?></td>
                        <td><?= $data["fromm"]."H - ". $data["until"]."H"  ?></td>
                        <td><a  href="update.php?id=<?=$data["id"] ?>"> <img src="img/pen.png" alt=""></a></td>
                        <td><a href="delete.php?id=<?=$data["id"] ?>"> <img src="img/trash.png" alt=""></a></td>
                       
                    </tr>
                    
                    <?php 

                }

         ?>
        </table>
   
   
   
   
    </div>
</body>
</html>