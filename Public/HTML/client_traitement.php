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
    // echo $_POST['id_client'];
}

if (isset($_POST['visible'])) {
    $id_Client = $_POST['id_client'];
    if (($_POST['visible']) == true) {
        $sql_insert_favoris = "INSERT INTO  favoris (`id_Utilisateur`, `id_Admin`, `id_Fvr`) VALUES ($id_Client, 1 ,$rows_fav )";
        // mysqli_query($conn, $sql_insert_favoris);
        echo 'insert';
    }
    if (!($_POST['visible']) == false) {
        //delete
        $sql_delete_favoris = "DELETE FROM `favoris` WHERE `id_Utilisateur` =$id_Client ";
        // mysqli_query($conn, $sql_delete_favoris);

    }
}

if (isset($_POST['visible1'])) {
    echo $_POST['visible1'];
}
if (isset($_POST['id_client1'])) {
    echo $_POST['id_client1'];
}
