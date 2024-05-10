<?php
include("../../appointmentMedicale/Html/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les autres valeurs du formulaire
    $location = $_POST["location"] ?? "";
    $price = $_POST["price"] ?? "";

    // Traitement de l'image
    $targetDir = "../../img/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Vérifier si un fichier a été téléchargé
    if ($_FILES["file"]["size"] == 0) {
        echo "Aucun fichier n'a été téléchargé.";
        $uploadOk = 0;
    }

    // Vérifier si le fichier image est une image réelle ou une fausse image
    //$check = getimagesize($_FILES["fileInput"]["img"]);
    //if($check === false) {
      //  echo "Le fichier n'est pas une image.";
        //$uploadOk = 0;
    //}

    // Vérifier si le fichier existe déjà
    //if (file_exists($targetFile)) {
      //  echo "Désolé, le fichier existe déjà.";
        //$uploadOk = 0;
    //}

    // Vérifier la taille du fichier
    if ($_FILES["file"]["error"] != UPLOAD_ERR_OK) {
        echo "Une erreur s'est produite lors du téléchargement du fichier.";
        $uploadOk = 0;
    }
    

    // Autoriser certains formats de fichiers
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
        $uploadOk = 0;
    }

    // Vérifier si $uploadOk est défini à 0 par une erreur
    if ($uploadOk == 0) {
        echo "Désolé, votre fichier n'a pas été téléchargé.";
    // si tout est ok, essayer d'envoyer le fichier
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "Le fichier " . basename($_FILES["file"]["name"]) . " a été téléchargé.";

            // Insérer les données dans la base de données
            $servername = "localhost";
           // $username = "username";
           $user='root';
            $password = "";
            $dbname = "rdv";

            try {
                $con = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $con->prepare("INSERT INTO doctor (location, price, img) VALUES (:location, :price, :image)");
                $stmt->bindParam(':location', $location);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':image', $targetFile);
                $stmt->execute();

                echo "Modifications enregistrées avec succès";
            } catch(PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }

            $con = null;
        } else {
            echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
        }
    }
}
?>

