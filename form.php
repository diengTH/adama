<?php
$bdd = mysqli_connect('localhost','root','','commande') or die (mysqli_error());
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$nombre = $_POST['nombre'];

$req ="INSERT INTO ligne (arrive,depart,adulte,enfant,chambre) VALUES('$prenom','$nom','$adresse','$telephone','$nombre')";
$res=mysqli_query($bdd,$req);
?>
<?php

   echo "<h1 align='center'>"."merci pour la confiance."."</h1>";

?>