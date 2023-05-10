<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="./connection.css">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav >
        <?php include("./entet.php"); ?>
    </nav>
    </header>
    <form action="./photos.php" method="post">
    <div id="produit" class="body">
        <button type="submit" name="action" value="peau" class="button">
        <div class="box">
            <div class="glass"></div>
            <div class="content">
                <h2>PEAU</h2>
                <img src="./photos/peau/4 Recettes Faciles de GEL DOUCHE Pour Ne Plus Jamais En Acheter !.png" alt="">
                
            </div>
        </div>
    </button>
    <button type="submit" name="action" value="coiffure" class="button">
        <div class="box">
            <div class="glass"></div>
            <div class="content">
                <h2>COIFFURE</h2>
                <img src="./photos/coiffure/Recette de shampoing sans tensioactif à l'avoine.png" alt="">
            </div>
        </div>
    </button>
    <button type="submit" name="action" value="manucurepedicure" class="button">
        <div class="box">
            <div class="glass"></div>
            <div class="content">
                <h2>MANUCURE PEDICURE</h2>
                <img src="./photos/vermis/4 étapes pour une manucure parfaite.jfif" alt="">
            </div>
        </div>
    </button>
    <button type="submit" name="action" value="hygenes" class="button">
        <div class="box">
            <div class="glass"></div>
            <div class="content">
                <h2>HYGENES</h2>
                <img src="./photos/hygenes/En 5 Minutes Retirer La Plaque Des Dents Seulement Avec Ce Mélange.jfif" alt="">
            </div>
        </div>
    </button>
    <button type="submit" name="action" value="parfum" class="button">
        <div class="box">
            <div class="glass"></div>
            <div class="content">
                <h2>PARFUM</h2>
                <img src="./photos/parfum/f6a55b2d-51a8-436e-a27e-334664b914b4.jfif" alt="">
            </div>
        </div>
    </button>
</form>
        <script src="./script.js"></script>
    </div>
    <script type="text/javascript">
        const actionservice = document.querySelector("#service")
        const service = document.querySelector("#servicef")
            actionservice.addEventListener('click',()=>{
                service.style.visibility="inherit";
            })
        function toggleMenu(){
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            navigation.classList.toggle('active');
            toggle .classList.toggle('active');
        }
    </script>
</body>
</html>