<?php
include("connect.php");

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $email = ''; // Initialisez la variable pour stocker l'e-mail après la récupération

    // Récupérez l'e-mail associé au token depuis la base de données
    $sql = "SELECT email FROM doctor WHERE verification_token = '$token'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email']; // Stockez l'e-mail récupéré
    }
    if (!empty($email)) {
            // Mettez à jour le champ de vérification dans la base de données pour marquer l'e-mail comme vérifié
            $updateSql = "UPDATE doctor SET verification_token = NULL, verification_status = 1 WHERE verification_token = '$token'";
            if ($con->query($updateSql) === TRUE) {
                echo "L'e-mail a été vérifié avec succès.";
                // Redirigez l'utilisateur vers une page de succès ou effectuez d'autres actions nécessaires
            } else {echo "Erreur lors de la mise à jour de l'état de vérification : " . $con->error;
            }
    } else {
            echo "Token invalide ou expiré.";
            // Gérez le cas où le token n'est pas trouvé ou est expiré
        }
} else {
    echo "Token non fourni.";
    // Gérez le cas où aucun token n'est fourni dans l'URL
}

$con->close();
?>