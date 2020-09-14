<div id="Pub">
    <img src="../IMG/Img_Site/pub.jpg" alt="">
</div>
<div id="Compte">
    <div id="C1">
        <div id="Div_img">
            <div id="img1"><img src="../IMG/Img_Profil/imageDefault.svg" alt=""></div>
        </div>
        <div id="Infos">
            <?php
            $conn = new mysqli("localhost", "root", "", "locar");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $id_c = $_SESSION['id_client'];
            $sql_client = "SELECT * FROM client WHERE id_utilisateur = $id_c ";
            $res_client = mysqli_query($conn, $sql_client);
            $ligne  = mysqli_num_rows($res_client);
            $ligne_client = mysqli_fetch_assoc($res_client);
            ?>
            <?php
            if ($ligne >= 1) {
                $verif_client = true;
            } ?>
            <div class="Info">

                <div class="Info1">
                    <p>NOM</p>
                </div>
                <div class="RempInfos1">
                    <p><?php echo $ligne_client['Nom']; ?></p>
                </div>
            </div>
            <div class="Info">
                <div class="Info1">
                    <p>PRENOM</p>
                </div>
                <div class="RempInfos1">
                    <p><?php echo $ligne_client['Prenom'] ?> </p>
                </div>
            </div>
            <div class="Info">
                <div class="Info1">
                    <p>AGE</p>
                </div>
                <div class="RempInfos1" id="Adresse">
                    <p><?php if ($ligne_client['Annee']) echo (2020 - $ligne_client['Annee'] . '&nbsp ANS');
                        else echo ('information indisponible');   ?></p>
                </div>
            </div>
            <div class="Info">
                <div class="Info1">
                    <p>TELEPHONE</p>
                </div>
                <div class="RempInfos1" id="Adresse">
                    <p><?php echo  $ligne_client['Telephone'];  ?></p>
                </div>
            </div>
        </div>
        <div id="btnDec">
            <input type="button" value="DECONNEXION">
        </div>

    </div>
    <div id="Liste_reservation">
        <?php
        $sql_res_client = "SELECT * FROM voiture AS v ,client AS C ,reservation AS r WHERE C.id_Utilisateur = R.id_Utilisateur AND R.id_V = V.id_V AND R.id_Utilisateur  = $id_c";
        $resultat = $conn->query($sql_res_client);
        while ($ligne_res_client = $resultat->fetch_assoc()) {

            echo '
        <div class="Zone_res">
        <div class="Voiture">
        <div class="img_V"><img src="../IMG/Img_voiture/' . $ligne_res_client['img_v'] . '.png" alt=""></div>
        <div class="Des_VB">
            <div class="Des_V">
                <div id="Z1">
                    <div class="zone_separ_blanc zone_separ"></div>
                    <p>' . $ligne_res_client['Modele'] . '</p>
                    <div class="zone_separ_blanc zone_separ"></div>
                    <span class="spanDes">' . $ligne_res_client['descrip'] . '</span>
                    <div class="blank"></div>
                    <p>DATE DEPART : </p>
                    <input value="' . $ligne_res_client['date_Depart'] . '" type="text" >
                    <p>DATE RETOUR : </p>
                    <input value="' . $ligne_res_client['date_Retour'] . '" type="text" ">

                </div>
                <div class=" Z2 val_id">
                    <div class="prix">
                        <p>PRIX : ' . $ligne_res_client['prix'] . ' DHS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>';
        }
        ?>

    </div>
    <div class="blank"></div>
    <div class="Zone_res"></div>



</div>

</div>