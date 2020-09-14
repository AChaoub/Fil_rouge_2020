<?php

$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$sql_reservation = "SELECT * FROM reservation";
$res_r = mysqli_query($conn, $sql_reservation);
$i = mysqli_num_rows($res_r) + 1;
$id_c = $_SESSION['id_client'];
// $id_c1 = 1;
if ((isset($_POST['dateD'])) || (isset($_POST['dateR'])) && (isset($_POST['id_voiture']))) {
    echo $i;
    $id_voiture = $_POST['id_voiture'];
    $dateD = date("Y-m-d", strtotime($_POST['dateD']));
    $dateR = date("Y-m-d", strtotime($_POST['dateR']));
    $sql_insert_Reservation = "INSERT INTO `reservation`(`id_Utilisateur`, `id_V`, `id_Res`, `date_Depart`, `date_Retour`) VALUES ($id_c,$id_voiture,$i,'$dateD','$dateR')";
    mysqli_query($conn, $sql_insert_Reservation);
}
