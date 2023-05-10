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
                <a href="./index.php">
                    <span class="icon"><i class="fa-solid fa-home"></i></span>
                    <span class="title">ACCUEIL</span>
                </a>
            </li>
            <li>
                <a href="#servicef" id="service">
                    <span class="icon"><i class="fa-solid fa-user-alt"></i></span>
                    <span class="title">SERVICES</span>
                </a>
            </li>
            <li>
                <a href="./produit.php">
                    <span class="icon"><i class="fa-solid fa-gift"></i></span>
                    <span class="title">PRODUIT</span>
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
    <div id="servicef" class="container">
        <div class="header">
            <h2>Connecte vous </h2>
        </div>
        <form action="./traitement.php" class="form" id="form" method="post">
            <div class="form-control">
                <label for="">Matricule</label>
                <input type="text" name="matricule" placeholder="MC1457LK">
            </div>
            <div class="form-control">
                <label for=""> Mot de passe</label>
                <input type="password" placeholder="Ronasdev25." name="motpasse">
            </div>
            
            <button type="submit" name="connection" value="connecter"><i class="fa-sharp fa-solid fa-plus"></i>Se Connecter</button>
        </form>
        <form action="./inscription.php" class="form" id="form">
            <button type="submit" name="action" value="inscrirer"><i class="fa-sharp fa-solid fa-plus"></i>S'inscrirer</button>
        </form>
    </div>
</body>
<script src="./script.js"></script>
    </div>
    <script type="text/javascript">
        const actionservice = document.querySelector("#service")
        const service = document.querySelector("#servicef")
            actionservice.addEventListener('click',()=>{
                service.style.visibility="inherit";
                service.style.position="absolue";
                service.style.z.index="10000";
            })
        function toggleMenu(){
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            navigation.classList.toggle('active');
            toggle .classList.toggle('active');
        }
    </script>
</html>