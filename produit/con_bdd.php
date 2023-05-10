<?php 
   
   //On établie la connexion à la base de données
   $con = mysqli_connect("localhost","root","","site");
   //on verifie la connexion
   if(!$con) {
    die('Erreur :'.mysqli_connect_error()) ;
   }

?>