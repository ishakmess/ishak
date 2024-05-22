<?php
// Connexion à la base de données
include("../../appointmentMedicale/Html/connect.php");
$id = $_GET['id'];
//echo $id;
// Effectuer la mise à jour dans la base de données
$sql = "UPDATE requete SET etatrequete = 'accepté' WHERE id = $id";

// Exécuter la requête
$result = mysqli_query($con, $sql);
// Rediriger vers la page précédente ou une autre page appropriée

header("Location:../Html/PatientRequet.php");
exit;

?>