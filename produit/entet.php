<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="./entet.css">
    <link rel="stylesheet" href="./connection.css">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="../index.php">
                    <span class="icon"><i class="fa-solid fa-home"></i></span>
                    <span class="title">ACCUEIL</span>
                </a>
            </li>
            <li>
                <a href="../produit.php">
                    <span class="icon"><i class="fa-solid fa-gift"></i></span>
                    <span class="title">PRODUIT</span>
                </a>
            </li>
            <li>
                <a href="./code.php">
                    <span class="icon"><i class="fa-solid fa-add"></i></span>
                    <span class="title">Ajouter un code</span>
                </a>
            </li>
            <li>
                <a href="liste.php">
                    <span class="icon"><i class="fa-solid fa-list"></i></span>
                    <span class="title">Liste des photos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa-solid fa-comment"></i></span>
                    <span class="title">CONTACT</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="toggle"onclick="toggleMenu()"></div>
    
</body>
<script src="../script.js"></script>
    <script type="text/javascript">
        function toggleMenu(){
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            navigation.classList.toggle('active');
            toggle .classList.toggle('active');
        }
    </script>
</html>