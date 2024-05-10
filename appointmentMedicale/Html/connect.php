<?php
$host='localhost';
$user='root';
$pw='';
$ndb='rdv';

$con=mysqli_connect($host,$user,$pw,$ndb);
if ($con) {
    echo "Connexion établie avec succès";
} else {
    echo "Erreur de connexion : " . mysqli_connect_error();
}
?>