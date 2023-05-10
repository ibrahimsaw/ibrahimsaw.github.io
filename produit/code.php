<?php 

function confirmDelete($nom)
{
    echo '<script type="text/javascript">';
    echo 'if (confirm(" ' . $nom . ' ?")){';
    echo 'window.location = "./produit.php";';
    echo '} ';
    echo '</script>';
}
try {
    $bdd = new PDO('mysql:host=localhost;dbname=site', 'root', '');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
// Fonction pour ajouter un produit à la base de données
function addProduct($bdd, $code) {
    $stmt = $bdd->prepare("INSERT INTO code (code) VALUES (:code)");
    $stmt->bindParam(':code', $code);
    $stmt->execute();
    confirmDelete("Ajout réussi");

}
if (isset($_POST['send'])) {
    $reponse = $bdd->query('SELECT * FROM code');
    addProduct($bdd, $_POST['code']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="./produit.php" class="link">Ajouter un produit</a>
    <p class="error">
        <?php 
           //afficher une erreur si la variable message existe
           if(isset($message)) echo $message ;
        ?>
    </p>
    <form action="./code.php" method="POST"> 
        <label>Entre un code</label>
        <input type="text" name="code">
        <input type="submit" value="Ajouter" name="send">
    </form>
</body>
</html>