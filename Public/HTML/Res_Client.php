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
                    <p><?php echo (2020 - $ligne_client['Annee'] . '&nbsp ANS');  ?></p>
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
    <div id="C2">


    </div>

</div>