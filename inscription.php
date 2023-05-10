<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./inscription.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <header>
    <?php include("./entet.php"); ?>
    </header>
    <div class="container">
        <form action="traitement.php" class="formulaire" id="form" method="post">
        <div class="form-control">
            <label for="">Nom</label>
            <input type="text" id="email" name="nom" placeholder="TRAORE">
        </div>
        <div class="form-control">
            <label for="">Prenom</label>
            <input type="text" id="text" placeholder="Fati" name="prenom">
        </div>
        <div class="form-control">
            <label for="">Matricule</label>
            <input type="text" id="matricule" name="matricule" placeholder="MC785L5">
        </div>
        <div class="form-control">
            <label for=""> Mot de passe</label>
            <input type="password" id="password" placeholder="Ronasdev51." name="motpasse">
        </div>
        <button type="submit" name="enregistre" value="add"><i class="fa-sharp fa-solid fa-plus"></i>Enregistre</button>
    </form>
    </div>
    <script src="./script.js"></script>
</body>

</html>