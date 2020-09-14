<?php
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `voiture` ,marque , categorie WHERE voiture.id_Marque = marque.id_Marque and voiture.id_cat  = categorie.id_cat ";

if (isset($_POST['marque'])) {
    if ($_POST['marque'] != 'full') {
        $marque = $_POST['marque'];
        $sql .= "AND marque.libelle ='$marque' ";
    }
}
if (isset($_POST['carburant'])) {
    if ($_POST['carburant'] != "tout") {
        $carb = $_POST['carburant'];
        $sql .= "AND voiture.carburant = '$carb'";
    }
}

if (isset($_POST['range_1']) && isset($_POST['range_2'])) {
    $min = $_POST['range_1'];
    $max = $_POST['range_2'];
    $sql .= "AND prix BETWEEN $min AND $max";
}
if (isset($_POST['categorie'])) {
    $cat =  $_POST['categorie'];
    if ($cat != "TT") {
        $sql .= " AND categorie.libelle='$cat'";
    }
}

$resultat = $conn->query($sql);
$rows  = mysqli_num_rows($resultat);
if ($rows == 0) {
    echo '<script>alert("Aucune voiture correspond a votre recherche")</script>';
} else {
    echo '    <form action="#" method="POST">
    ';
    while ($ligne = $resultat->fetch_assoc()) {

        echo '<div class="Voiture">
            <div class="img_V"><img src="../IMG/Img_voiture/' . $ligne['img_v'] . '.png" alt=""></div>
            <div class="Des_VB">
                <div class="Des_V">
                    <div id="Z1">
                        <div class="zone_separ_blanc zone_separ"></div>
                        <p>' . $ligne['Modele'] . '</p>
                        <div class="zone_separ_blanc zone_separ"></div>
                        <span class="spanDes">' . $ligne['descrip'] . '</span>
                        <div class="blank"></div>
                        <input id="ReservDate_D_' . $ligne['id_V'] . '" type="date" class="dateD"  >
                        <input id="ReservDate_R_' . $ligne['id_V'] . '" type="date" class="dateR" >

                    </div>
                    <div class=" Z2 val_id" value="' . $ligne['id_V'] . '">
                        <div class="prix">
                            <p>PRIX : ' . $ligne['prix'] . ' DHS</p>
                        </div>
                        <div class="BReservation">
                            <input class="BtnRes" onclick="Insert_res(' . $ligne['id_V'] . ')" type="button" value="RESERVER">
                        </div>
                    </div>
                </div>
                <div class="Des_B">
                    <div class="Icones">
                        <div class="icone" id="icone1">
                            <div class="imgI">
                                <img src="../IMG/Img_Site/car-door-black.png" alt="">
                            </div>
                            <div class="pI">
                                <p>PORTES</p>
                                <p>' . $ligne['Nb_portes'] . '</p>
                            </div>
                        </div>
                    </div>
                    <div class="Icones">
                        <div class="icone" id="icone1">
                            <div class="imgI">
                                <img src="../IMG/Img_Site/travel-black.png" alt="">
                            </div>
                            <div class="pI">
                                <p>BAGAGES</p>
                                <p>' . $ligne['bagage'] . '</p>
                            </div>
                        </div>
                    </div>
                    <div class="Icones">
                        <div class="icone" id="icone1">
                            <div class="imgI">
                                <img src="../IMG/Img_Site/freezer.png" alt="">
                            </div>
                            <div class="pI">
                                <p>CLIMATISATION</p>
                                <p>' . $ligne['clim'] . '</p>
                            </div>
                        </div>
                    </div>
                    <div class="Icones">
                        <div class="icone" id="icone1">
                            <div class="imgI">
                                <img src="../IMG/Img_Site/transmission.png" alt="">
                            </div>
                            <div class="pI">
                                <p>TRANSMISSION</p>
                                <p>' . $ligne['transmission'] . '</p>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="zone_separ_blanc zone_separ"></div>';
    }
    echo "</form>";
}

$conn->close();
