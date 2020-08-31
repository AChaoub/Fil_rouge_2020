<?php
session_start();
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// recuperer id_admin 
$sql_nb_favoris = "SELECT * from favoris ";
$res = mysqli_query($conn, $sql_nb_favoris);
$rows_fav = mysqli_num_rows($res) + 1;
$id_admin = 1;
if (isset($_POST['id_client'])) {
    echo $_POST['id_client'];
}

if (isset($_POST['visible'])) {


    echo $_POST['visible'];
    if (($_POST['visible']) == true) {
        //insert 
        // $sql_favoris = "INSERT INTO  favoris (`id_Utilisateur`, `id_Admin`, `id_Fvr`) VALUES (" . $_SESSION['id_utilisateur'] . "," . $id_admin . "," . $rows_fav . ")";
    } else {
        //delete

    }
}

if (isset($_POST['visible1'])) {
    echo $_POST['visible1'];
}
if (isset($_POST['id_client1'])) {
    echo $_POST['id_client1'];
}
