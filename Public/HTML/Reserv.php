<?php
include('DB_conn.php');
?>
<div class=".zone_separ zone_separ_blanc"></div>
<div id="R1">
    <div id="R1-A">
        <div class="zone_separ_color zone_separ"></div>
        <div id="R1-A-1">
            <p>Voiture en vedette</p>
        </div>
        <div id="R1-A-2">Mercedes benz <br>E3000</div>
        <div id="R1-A-3">
            <div class="R1-A-3-1">
                <div>
                    <img src="../IMG/Img_Site/Door.png" alt="">
                </div>
                <p>PORTES : 5</p>
            </div>
        </div>
        <div id="R1-A-3">
            <div class="R1-A-3-1">
                <div>
                    <img src="../IMG/Img_Site/Door.png" alt="">
                </div>
                <p>CARBURANT : DIESEL</p>
            </div>
        </div>
        <div id="R1-A-3">
            <div class="R1-A-3-1">
                <div>
                    <img src="../IMG/Img_Site/Door.png" alt="">
                </div>
                <p>TRANSMISSION : M</p>
            </div>
        </div>
        <div class="zone_separ_color zone_separ"></div>
        <button>A PARTIR DE <span> 500DHS</span></button>

    </div>
    <div id="R1-B"></div>
</div>
<div class="zone_separ_blanc zone_separRes"></div>
<form method="POST">
    <div id="R2">
        <div id="Zone_Fil">
            <div id="ZF-1">
                <p id="p_rech">OPTIONS DE RECHERCHE</p>
                <img src="../IMG/Img_Site/searching-car.png" alt="">
            </div>
            <div class="zone_separ_blanc zone_separ"></div>
            <p>MARQUE:</p>
            <div class="zone_separ_blanc zone_separ"></div>
            <div id="Marque">
                <select name="marque" id="marq">
                    <option value="full">Tous les marques :</option>
                    <?php
                    $sql_marque = "SELECT libelle FROM `marque`";
                    $res_marque = mysqli_query($conn, $sql_marque);
                    while ($ligne_marque = $res_marque->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $ligne_marque['libelle']; ?>"><?php echo $ligne_marque['libelle']; ?></option>;
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="zone_separ_blanc zone_separ"></div>
            <p>ECHELLE DE PRIX:</p>
            <div class="zone_separ_blanc zone_separRes"></div>
            <div id="range">
                <div class="rangeslider">
                    <input class="min" id="Rmin" name="range_1" type="range" min="1" max="10" value="1" />
                    <input class="max" id="Rmax" name="range_2" type="range" min="1" max="10" value="8" />
                    <span class="range_min light left">250 DHS</span>
                    <span class="range_max light right">2000 DHS</span>
                </div>
            </div>
            <div class="zone_separ_blanc zone_separ"></div>
            <div class="zone_separ_blanc zone_separ"></div>
            <div class="zone_separ_blanc zone_separ"></div>
            <p>TYPE DE CARROSSERIE DU VÉHICULE</p>
            <div class="zone_separ_blanc .zone_separ"></div>
            <div id="Type_V">
                <div id="Types" name='type'>
                    <div class="Type_1" name="TT">
                        <input data-type="check" data-field="body" type="checkbox" name="ALL" id="super-car" value="TT" style="display: none;"> <label for="super-car">
                            <div class="body-icon-wrapper"> <img src="../IMG/Img_voiture/p1.png" alt="TOUTES VOITURES"></div>
                            <p class="auto_body_name">ALL</p>
                        </label>
                    </div>
                    <div class="Type_1" name="CP">
                        <input data-type="check" data-field="body" type="checkbox" name="CP" id="cp" value="COUPE" style="display: none;"> <label for="cp">
                            <div class="body-icon-wrapper"> <img src="../IMG/Img_voiture/p2.png" alt="TOUTES VOITURES"></div>
                            <p class="auto_body_name">COUPE</p>
                        </label>
                    </div>
                    <div class="Type_1" name="MN">
                        <input data-type="check" data-field="body" type="checkbox" name="MN" id="mn" value="MINI" style="display: none;"> <label for="mn">
                            <div class="body-icon-wrapper"> <img src="../IMG/Img_voiture/p3.png" alt="TOUTES VOITURES"></div>
                            <p class="auto_body_name">MINI</p>
                        </label>
                    </div>
                    <div class="Type_1" name="PK">
                        <input data-type="check" data-field="body" type="checkbox" name="PK" id="pk" value="PICKUP" style="display: none;"> <label for="pk">
                            <div class="body-icon-wrapper"> <img src="../IMG/Img_voiture/p4.png" alt="PICKUP"></div>
                            <p class="auto_body_name">PICKUP</p>
                        </label>
                    </div>
                    <div class="Type_1" name="SD">
                        <input data-type="check" data-field="body" type="checkbox" name="SD" id="sd" value="SEDAN" style="display: none;"> <label for="sd">
                            <div class="body-icon-wrapper"> <img src="../IMG/Img_voiture/p5.png" alt="TOUTES VOITURES"></div>
                            <p class="auto_body_name">SEDAN</p>
                        </label>
                    </div>
                    <div class="Type_1" name="LX">
                        <input data-type="check" data-field="body" type="checkbox" name="LX" id="lx" value="LUXE" style="display: none;"> <label for="lx">
                            <div class="body-icon-wrapper"> <img src="../IMG/Img_voiture/p1.png" alt="LUXE"></div>
                            <p class="auto_body_name">LUXE</p>
                        </label>
                    </div>
                </div>
                <!-- <div class="Type_1" name="TT">
                        <img src="../IMG/Img_voiture/p1.png" alt="">
                        <p>TOUTES VOITURES</p>
                    </div>
                    <div class="Type_1" name="CP">
                        <img src="../IMG/Img_voiture/p2.png" alt="">
                        <p>COUPE</p>
                    </div>
                    <div class="Type_1" name="MN">
                        <img src="../IMG/Img_voiture/p3.png" alt="">
                        <p>MINI</p>
                    </div>
                    <div class="Type_1" name="PK">
                        <img src="../IMG/Img_voiture/p4.png" alt="">
                        <p>PICKUP</p>
                    </div>
                    <div class="Type_1" name="SD">
                        <img src="../IMG/Img_voiture/p1.png" alt="">
                        <p>SEDAN</p>
                    </div>
                    <div class="Type_1" name="LX">
                        <img src="../IMG/Img_voiture/p5.png" alt="">
                        <p>LUXE</p>
                    </div>
                </div> -->

            </div>
            <div class="zone_separ_blanc zone_separRes"></div>
            <p>TYPE CARBURANT</p>
            <div class="zone_separRes zone_separ_blanc "></div>
            <div id="Carburant">
                <select name="carburant" id="carb">
                    <option value='tout'>Carburant :</option>
                    <?php
                    $sql_carb = "SELECT distinct carburant from voiture";
                    $res_carb = mysqli_query($conn, $sql_carb);
                    while ($ligne_carb = $res_carb->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $ligne_carb['carburant'] ?>"><?php echo $ligne_carb['carburant']; ?></option>;
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="zone_separ_blanc zone_separRes"></div>
        </div>

        <div id="Zone_Res">
            <div id="Type_affichage">
                <div id="Full">
                    <img src="../IMG/Img_voiture/list.png" alt="">
                </div>
                <div id="Semi">
                    <img src="../IMG/Img_voiture/menu.png" alt="">
                </div>
            </div>
            <div id="autre">
                <!-- Affichage List -->
                <div class="Voiture_list">
                    <!-- <div class="Voiture">
                        <div id="img_V"><img src="../IMG/Img_voiture/fiat-500.png" alt=""></div>
                        <div id="Des_VB">
                            <div id="Des_V">
                                <div id="Z1">
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <p>FIAT 500C</p>
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <span>Stock#: 45098ES – 4 door, White, 2.5L, FWD,
                                        Automatic 6-Speed, 2.5L 5 cyls, Florida CA</span>
                                </div>
                                <div id="Z2">
                                    <div id="prix">
                                        <p>PRIX : 250 DHS</p>
                                    </div>
                                    <div class="BTNRes">
                                        <input type="button" value="RESERVER">
                                    </div>
                                </div>
                            </div>
                            <div id="Des_B">
                                <div class="Icones">
                                    <div class="icone" id="icone1">
                                        <div class="imgI">
                                            <img src="../IMG/Img_Site/car-door-black.png" alt="">
                                        </div>
                                        <div class="pI">
                                            <p>PORTES</p>
                                            <p>6</p>
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
                                            <p>6</p>
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
                                            <p>OUI</p>
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
                                            <p>MANUELLE</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="zone_separ_blanc zone_separ"></div>
                    <div class="Voiture">
                        <div id="img_V"><img src="../IMG/Img_voiture/fiat-500.png" alt=""></div>
                        <div id="Des_VB">
                            <div id="Des_V">

                                <div id="Z1">
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <p>FIAT 500C</p>
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <span>Stock#: 45098ES – 4 door, White, 2.5L, FWD,
                                        Automatic 6-Speed, 2.5L 5 cyls, Florida CA</span>
                                </div>
                                <div id="Z2">
                                    <div id="prix">
                                        <p>PRIX : 250 DHS</p>
                                    </div>
                                    <div class>
                                        <input type="button" value="RESERVER">
                                    </div>
                                </div>
                            </div>
                            <div id="Des_B">
                                <div class="Icones">
                                    <div class="icone" id="icone1">
                                        <div class="imgI">
                                            <img src="../IMG/Img_Site/car-door-black.png" alt="">
                                        </div>
                                        <div class="pI">
                                            <p>PORTES</p>
                                            <p>6</p>
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
                                            <p>6</p>
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
                                            <p>OUI</p>
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
                                            <p>MANUELLE</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="zone_separ_blanc zone_separ"></div>
                    <div class="Voiture">
                        <div id="img_V"><img src="../IMG/Img_voiture/fiat-500.png" alt=""></div>
                        <div id="Des_VB">
                            <div id="Des_V">

                                <div id="Z1">
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <p>FIAT 500C</p>
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <span>Stock#: 45098ES – 4 door, White, 2.5L, FWD,
                                        Automatic 6-Speed, 2.5L 5 cyls, Florida CA</span>
                                </div>
                                <div id="Z2">
                                    <div id="prix">
                                        <p>PRIX : 250 DHS</p>
                                    </div>
                                    <div class>
                                        <input type="button" value="RESERVER">
                                    </div>
                                </div>
                            </div>
                            <div id="Des_B">
                                <div class="Icones">
                                    <div class="icone" id="icone1">
                                        <div class="imgI">
                                            <img src="../IMG/Img_Site/car-door-black.png" alt="">
                                        </div>
                                        <div class="pI">
                                            <p>PORTES</p>
                                            <p>6</p>
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
                                            <p>6</p>
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
                                            <p>OUI</p>
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
                                            <p>MANUELLE</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="zone_separ_blanc zone_separ"></div>
                    <div class="Voiture">
                        <div id="img_V"><img src="../IMG/Img_voiture/fiat-500.png" alt=""></div>
                        <div id="Des_VB">
                            <div id="Des_V">

                                <div id="Z1">
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <p>FIAT 500C</p>
                                    <div class="zone_separ_blanc zone_separ"></div>
                                    <span>Stock#: 45098ES – 4 door, White, 2.5L, FWD,
                                        Automatic 6-Speed, 2.5L 5 cyls, Florida CA</span>
                                </div>
                                <div id="Z2">
                                    <div id="prix">
                                        <p>PRIX : 250 DHS</p>
                                    </div>
                                    <div class>
                                        <input type="button" value="RESERVER">
                                    </div>
                                </div>
                            </div>
                            <div id="Des_B">
                                <div class="Icones">
                                    <div class="icone" id="icone1">
                                        <div class="imgI">
                                            <img src="../IMG/Img_Site/car-door-black.png" alt="">
                                        </div>
                                        <div class="pI">
                                            <p>PORTES</p>
                                            <p>6</p>
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
                                            <p>6</p>
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
                                            <p>OUI</p>
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
                                            <p>MANUELLE</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="zone_separ_blanc zone_separ"></div> -->
                </div>
                <!-- Affichage Grid -->
                <div class="Voitures_grid">
                    <!-- <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="marque">
                            <p>Peugeot 508 Sports</p>
                        </div>

                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1">
                        <div id="img">
                            <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                        </div>
                        <div id="res-Prix">
                            <div id="prix">
                                <p>250 DHS</p>
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
                                    <p>5</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/transmission.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>TRANSMISSION</p>
                                    <p>A</p>
                                </div>
                            </div>
                            <div>
                                <div id="imgV">
                                    <img src="../IMG/Img_Site/travel-black.png" alt="">
                                </div>
                                <div id="pV">
                                    <p>BAGAGES</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Voiture1"> -->
                    <!-- <div id="img">
                        <img src="../IMG/Img_voiture/fiat-500.png" alt="">
                    </div>
                    <div id="res-Prix">
                        <div id="prix">
                            <p>250 DHS</p>
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
                                <p>5</p>
                            </div>
                        </div>
                        <div>
                            <div id="imgV">
                                <img src="../IMG/Img_Site/transmission.png" alt="">
                            </div>
                            <div id="pV">
                                <p>TRANSMISSION</p>
                                <p>A</p>
                            </div>
                        </div>
                        <div>
                            <div id="imgV">
                                <img src="../IMG/Img_Site/travel-black.png" alt="">
                            </div>
                            <div id="pV">
                                <p>BAGAGES</p>
                                <p>5</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <div id="R4">
    </div> -->
</form>
<script>
    //fonction Insert 
    async function Insert_res(id_voiture) {
        var y = await $.post('traitement_reservation.php', {
            id_voiture: id_voiture,
            dateD: $("#ReservDate_D_" + id_voiture).val(), // la valeur d' id ReservDate_D_"Parametre fonction"
            dateR: $("#ReservDate_R_" + id_voiture).val() // Mm commentaire.
        }).promise();

        window.location.href = "compte.php";
    }
    $cat_v = "TT";
    async function recup() {
        var x = await $.post('affichageFiltre.php', {
            range_1: $("#Rmin").val() * 250,
            range_2: $("#Rmax").val() * 250,
            marque: $("#marq").val(),
            carburant: $("#carb").val(),
            categorie: $cat_v
        }).promise();
        $("#autre .Voiture_list").html(x);
    }
    async function recup2() {
        var y = await $.post('affichageFiltre2.php', {
            range_1: $("#Rmin").val() * 250,
            range_2: $("#Rmax").val() * 250,
            marque: $("#marq").val(),
            carburant: $("#carb").val(),
            categorie: $cat_v
        }).promise();
        $("#autre .Voitures_grid").html(y);
    }
    recup();
    recup2();
    $("#Rmin").on("change", async function() {
        await recup();
        await recup2();
    });
    $("#Rmax").on("change", async function() {
        await recup();
        await recup2();
    });
    $("#marq").on("change", async function() {
        await recup();
        await recup2();
    });
    $("#carb").on("change", async function() {
        await recup();
        await recup2();
    });

    //Recuperer la valeur du checkbox
    $("input[type=checkbox]").change(async function() {
        $cat_v = $(this).val(); // pour affecter cette valeur --> categorie dans la fonction recup
        await recup();
        await recup2();
    });

    // Javascript Range function
    (function() {

        function addSeparator(nStr) {
            nStr += '';
            var x = nStr.split('.');
            var x1 = x[0];
            var x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + '.' + '$2');
            }
            return x1 + x2;
        }

        function rangeInputChangeEventHandler(e) {
            var rangeGroup = $(this).attr('name'),
                minBtn = $(this).parent().children('.min'),
                maxBtn = $(this).parent().children('.max'),
                range_min = $(this).parent().children('.range_min'),
                range_max = $(this).parent().children('.range_max'),
                minVal = parseInt($(minBtn).val()),
                maxVal = parseInt($(maxBtn).val()),
                origin = $(this).context.className;

            if (origin === 'min' && minVal > maxVal - 1) {
                $(minBtn).val(maxVal - 1);
            }
            var minVal = parseInt($(minBtn).val());
            $(range_min).html(addSeparator(minVal * 250) + ' DHS');


            if (origin === 'max' && maxVal - 1 < minVal) {
                $(maxBtn).val(1 + minVal);
            }
            var maxVal = parseInt($(maxBtn).val());
            $(range_max).html(addSeparator(maxVal * 250) + ' DHS');
        }

        $('input[type="range"]').on('input', rangeInputChangeEventHandler);
    })();;
    // function affichage List/grid
    $("#Semi").click(function() {
        $(".Voiture_list").hide();
        $(".Voitures_grid").css("display", "flex");
    });
    $("#Full").click(function() {
        $(".Voiture_list").css("display", "block");
        $(".Voitures_grid").hide();
    });
</script>