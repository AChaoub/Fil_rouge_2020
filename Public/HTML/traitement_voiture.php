<?php
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['id_supp'])) {
    $id_sp = $_POST['id_supp'];
    $sql_suppression = "DELETE FROM `voiture` WHERE id_V=$id_sp";
    if (mysqli_query($conn, $sql_suppression)) {
        echo "Records were deleted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // $conn->query($sql_suppression);
}


if (isset($_POST['id_v'])) {
    $id = $_POST['id_v'];
    echo $_POST['id_v'];
    if ($_POST['id_v']) {
        echo $_POST['prix'];
        $prix = $_POST['prix'];
        $sql = "UPDATE voiture SET prix=$prix WHERE id_V=$id";
        $resultat = $conn->query($sql);
    }
}
$sql_v = " SELECT * FROM voiture";
$res_v = mysqli_query($conn, $sql_v);
$ligne  = mysqli_num_rows($res_v);
// if ($ligne > 0) {
//     while ($ligne = $res_v->fetch_assoc()) {
//         echo '
//                         <div class="Voiture">
//                             <div class="img_v" >
//                                 <img src="../IMG/Img_voiture/fiat-500.png" width="80px" height="auto" alt="">
//                             </div>
//                             <div class="Modele"><p>Achraf</p></div>
//                             <div class="Btns">
//                                 <div class="modif" value=""><img  src="../IMG/Img_voiture/pencil.png" />
//                                 </div>
//                                 <div class="effacer" value=""><img  src="../IMG/Img_voiture/delete.png" />
//                                 </div>
//                                 <input type="hidden" value=' . $ligne['id_V'] . '>
//                             </div>
//                             <div class="Zone_modif" style="display: none;">
//                             <div class="cf-blank-10"></div>
//                             <p>Prix : </p>
//                             <input class="prix" type="text" value="' . $ligne['prix'] . '">
//                             <div class="cf-blank-10"></div>
//                             <input class="btnmodif" type="button" value="Modifier">
//                             </div>
//                         </div>
//                     ';
//     }
// }

while ($ligne = $res_v->fetch_assoc()) {
    echo '
                        <div class="Voiture">
                            <div class="img_v" >
                                <img src="../IMG/Img_voiture/fiat-500.png" width="80px" height="auto" alt="">
                            </div>
                            <div class="Modele"><p>Achraf</p></div>
                            <div class="Btns">
                                <div class="modif" value=""><img  src="../IMG/Img_voiture/pencil.png" />
                                </div>
                                <div class="effacer" value=""><img  src="../IMG/Img_voiture/delete.png" />
                                </div>
                                <input class="id" type="hidden" value=' . $ligne['id_V'] . '>
                            </div>
                            <div class="Zone_modif" style="display: none;">
                            <div class="cf-blank-10"></div>
                            <p>Prix : </p>
                            <input class="prix" type="text" value="' . $ligne['prix'] . '">
                            <div class="cf-blank-10"></div>
                            <input class="btnmodif" type="button" value="Modifier">
                            </div>
                        </div>
                    ';
} ?>

<div class="Voiture">
    <div class="img_ajout">
        <img src="../IMG/Img_voiture/ajout.png" width="80px" height="auto" alt="">
    </div>