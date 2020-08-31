<?php
$connexion = new mysqli("localhost", "root", "", "locar");
if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
}
?>