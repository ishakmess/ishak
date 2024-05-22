<?php
session_start();
include("../../appointmentMedicale/Html/connect.php");

// Récupérez l'ID du client depuis la session
$client_id = $_SESSION['client_id'];

// Requête pour obtenir les rendez-vous du patient connecté
$query = "SELECT requete.id, doctor.name AS doctor_name, requete.etatrequete 
          FROM requete 
          JOIN doctor ON requete.doctor_id = doctor.id_medcin 
          WHERE requete.client_id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $client_id);
$stmt->execute();
$result = $stmt->get_result();

$appointments = [];
while ($row = $result->fetch_assoc()) {
    $appointments[] = $row;
}

echo json_encode($appointments);
?>