<?php
// session_start();
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// recuperer id_admin 
$sql_nb_favoris = "SELECT * from favoris ";
$res = mysqli_query($conn, $sql_nb_favoris);
$rows_fav = mysqli_num_rows($res) + 1;

$sql_nb_bk = "SELECT * from liste_noir ";
$res_bk = mysqli_query($conn, $sql_nb_bk);
$rows_bk = mysqli_num_rows($res_bk) + 1;

$id_admin = 1;

if (isset($_POST['favoris_insert'])) {
    $id_Client = $_POST['id_client'];
    if (($_POST['favoris_insert']) == true) {
        $sql_insert_favoris = "INSERT INTO  favoris (`id_Utilisateur`, `id_Admin`, `id_Fvr`) VALUES ($id_Client, 1 ,$rows_fav )";
        mysqli_query($conn, $sql_insert_favoris);
    }
}
if (isset($_POST['favoris_delete'])) {
    $id_Client = $_POST['id_client'];
    if (($_POST['favoris_delete']) == true) {
        $sql_delete_favoris = "DELETE FROM `favoris` WHERE `id_Utilisateur` =$id_Client ";
        mysqli_query($conn, $sql_delete_favoris);
    }
}


// insert un client dans la table liste noire
if (isset($_POST['blacklist_insert'])) {
    $id_Client = $_POST['id_client'];
    if (($_POST['blacklist_insert']) == true) {
        $sql_insert_blacklist = "INSERT INTO  liste_noir (`id_Utilisateur`, `id_Admin`, `id_LN`) VALUES ($id_Client, 1 ,$rows_bk )";
        mysqli_query($conn, $sql_insert_blacklist);
    }
}
// supprimer un client du Liste noire
if (isset($_POST['blacklist_delete'])) {
    $id_Client = $_POST['id_client'];
    if (($_POST['blacklist_delete']) == true) {
        $sql_delete_blacklist = "DELETE FROM liste_noir WHERE `id_Utilisateur` =$id_Client ";
        mysqli_query($conn, $sql_delete_blacklist);
    }
}
