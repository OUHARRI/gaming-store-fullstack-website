<?php
session_start();
if (isset($_SESSION['name']) && $_SESSION['admin'] == 1) {

// connnection a la base de donné
include_once "connection.php";

// récupération de l'id de la categorie a partire de lien
$id = $_GET['id'];

//requette de suppression 
$req = mysqli_query($con, "DELETE FROM categorie WHERE id_categorie = $id");

// redirection vers la page de gestion
header("Location:../gestion.php?id=0");
} else {
    header("Location: ../connection");
    exit();
}
?>