<?php
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = " SELECT * FROM `voiture` ,marque , categorie WHERE voiture.id_Marque = marque.id_Marque and voiture.id_cat  = categorie.id_cat ";

if (isset($_POST['marque'])) {
    if ($_POST['marque'] != 'full') {
        $marque = $_POST['marque'];
        $sql2 .= "AND marque.libelle ='$marque' ";
    }
}
if (isset($_POST['carburant'])) {
    if ($_POST['carburant'] != "tout") {
        $carb = $_POST['carburant'];
        $sql2 .= "AND voiture.carburant = '$carb'";
    }
}

if (isset($_POST['range_1']) && isset($_POST['range_2'])) {
    $min = $_POST['range_1'];
    $max = $_POST['range_2'];
    $sql2 .= "AND prix BETWEEN $min AND $max";
}
if (isset($_POST['categorie'])) {
    $cat =  $_POST['categorie'];
    if ($cat != "TT") {
        $sql2 .= " AND categorie.libelle='$cat'";
    }
}
$resultat = $conn->query($sql2);
$rows  = mysqli_num_rows($resultat);
if ($rows == 0) {
    echo '<script>alert("Aucune voiture correspond a votre recherche")</script>';
} else {
    while ($ligne = $resultat->fetch_assoc()) {
        echo '<div class="Voiture1">
        <div id="img">
            <img src="../IMG/Img_voiture/' . $ligne['img_v'] . '.png" alt="">
        </div>
        <div id="marque">
            <p>' . $ligne['descrip'] . '</p>
        </div>
    
        <div id="res-Prix">
            <div id="prix">
                <p>' . $ligne['prix'] . ' DHS</p>
            </div>
            <div id="res">
                <input type="button" value="RESERVER">
            </div>
        </div>
    
        <div id="Caracteristique">
            <div>
                <div id="imgV">
                    <img src="../IMG/Img_Site/car-door-black.png" alt="">
                </div>
                <div id="pV">
                    <p>PORTES</p>
                    <p>' . $ligne['Nb_portes'] . '</p>
                </div>
            </div>
            <div>
                <div id="imgV">
                    <img src="../IMG/Img_Site/transmission.png" alt="">
                </div>
                <div id="pV">
                    <p>TRANSMISSION</p>
                    <p>' . $ligne['transmission'] . '</p>
                </div>
            </div>
            <div>
                <div id="imgV">
                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                </div>
                <div id="pV">
                    <p>BAGAGES</p>
                    <p>' . $ligne['bagage'] . '</p>
                </div>
            </div>
        </div>
    
    </div>';
    }
}

$conn->close();
