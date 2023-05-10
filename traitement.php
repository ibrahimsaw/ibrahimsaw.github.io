<?php 
function confirm($nom)
{
    echo '<script type="text/javascript">';
    echo 'if (confirm(" ' . $nom . ' ?")){';
    echo 'window.location = "./produit/produit.php";';
    echo '} ';
    echo '</script>';
}
function confirmm($nom)
{
    echo '<script type="text/javascript">';
    echo 'if (confirm(" ' . $nom . ' ?")){';
    echo 'window.location = "./index.php";';
    echo '} ';
    echo '</script>';
}
if(isset($_POST['enregistre'])) {
            //inclure la page de connexion
            include_once "./con_bdd.php";
            //afficher la liste des photos qui sont dans la base de donnée
            $nom = $_POST['nom'] ;
                $matricule = $_POST['matricule'] ;
                $prenom = $_POST['prenom'] ;
                $motpasse = $_POST['motpasse'] ;
                $req = mysqli_query($con , "INSERT INTO employe VALUES (NULL ,'$nom','$prenom','$matricule','$motpasse')");
                confirm("Enregistre");
    }
if(isset($_POST['connection'])) {
    include_once "con_bdd.php";
    $req = mysqli_query($con , "SELECT * FROM employe");
    //la verification du compte
    while($row = mysqli_fetch_assoc($req)){
        if($_POST['matricule'] == $row['matricule']){
            if($_POST['motpasse'] == $row['motpasse']){
                confirm("connecte");
            }
        }
    }
}
require "./index.php"
?>