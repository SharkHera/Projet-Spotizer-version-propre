<?php
require_once('traitement/database.php');

$request = "SELECT Lien_Music, Lien_Image, Titre, Nom_Artiste FROM musique";
$stmt = $conn->prepare($request);
$stmt->execute();
$Songdata = $stmt->fetchAll();
echo json_encode($Songdata);
?>