<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./photos.css">
    <link rel="stylesheet" href="./lightslider.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="./Jquery.js"></script>
    <script src="./lightslider.js"></script>
    <title>photos</title>
</head>
<?php include("./entet.php"); ?>
<body>
    <p class="contai">
        <ul id="autoWidth" class="cs-hidden">
            <?php
            //inclure la page de connexion
            include_once "con_bdd.php";
            //afficher la liste des photos qui sont dans la base de donnée
            $req = mysqli_query($con , "SELECT * FROM site ");

            //verifier que la liste n'est pas vide
            if(mysqli_num_rows($req) < 1){
                ?>
                <p class="vide_message">La liste des photos est vide.</p>
                <?php
            }

            //afficher la liste des photos
            while($row = mysqli_fetch_assoc($req)){
                if ($row['code']==$_POST['action'])
                {
                ?>         
                    <li class="item-a">
                <div class="carte">
                    <p class="sneakers"><?=$row['nom']?></p>
                    <img src="./produit/image_bdd/<?=$row['img']?>" alt="" class="modele">
                    <div class="detail">
                    
                        <h1><?=$row['prix']?>f</h1>
                        <p><strong><?=$row['text']?></strong></p>
                        <a href="//wa.me/+22663696961">
                            <img src="Media/whatsapp.png" alt="logo" class="logo">
                        </a>
                    </div>
                </div>
            </li>
                <?php
                }
            }
        ?>
            
        </ul>
        
        </p>
<script src="./script.js"></script>
</body>
</html>