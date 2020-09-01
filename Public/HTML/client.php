    <?php

    $conn = new mysqli("localhost", "root", "", "locar");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_client = " SELECT * FROM client";
    $res_client = mysqli_query($conn, $sql_client);
    $rows_client = mysqli_num_rows($res_client);
    // $ligne_client = mysqli_fetch_assoc($res_client);
    // $nom  = $ligne_client['Nom'];
    // $prenom  = $ligne_client['Prenom'];
    // $email  = $ligne_client['Email'];
    // $tel  = $ligne_client['Telephone'];
    ?>

    <div class="cf-blank-50"></div>
    <div class="container-custom cf-container-custom">
        <!-- Zone favoris haut -->
        <section class="favoris">
            <div class="icone_fav icone_fav-active">
                <div>Liste Client</div>
            </div>
        </section>
        <div class="cf-blank-10"></div>
        <!-- Zone Nombre Clients -->
        <section class="NB_client-section">
            <div class="count_cl">
                <div class="count_cl_nbr"><?php echo $rows_client ?></div>
                <div class="count_cl_profil">Profils</div>
            </div>
        </section>

        <div class="cf-blank-10"></div>

        <!-- Liste des contacts d'un admin precis -->
        <section class="cf-results-section">
            <?php
            if ($rows_client < 1) {
                echo '<p style="text-align:center"> Aucun client à afficher</p>';
            } else {
                while ($ligne = $res_client->fetch_assoc()) {
                    if ($ligne['Image_util'] != NULL) {
                        echo '
                                <div class="cf-results-profil">
                                <div id="Zone_profil_img">
                                    <div><img src="../IMG/Img_Profil/' . $ligne['Image_util'] . '.jpg" style="width:90px;height:80px;" alt=""></div>
                                </div>
                                <div id="Zone_infos">
                                    <h3>' . $ligne['Nom'] . '  ' . $ligne['Prenom'] . ' </h3>
                                    <div class="cf-blank-10"></div>
                                    <h5>' . $ligne['Email'] . ' </h5>
                                    <div class="cf-blank-10"></div>
                                    <h5>' . $ligne['Telephone'] . '</h5>
                                    <div class="cf-blank-10"></div>
                                </div>
                                <div id="Zone_icone">
                                    <div class="icone" name="fav">
                                            <div class="cf-results-top-iconBG cf-results-top-heart red-heart"  >
                                                <img  class="BH" src="../IMG/Img_Profil/64px-Ei-heart.png" width="50px" height="auto" alt="" >
                                                <img style="display:none" class="RH" src="../IMG/Img_Profil/heart.png" width="35px" height="auto" alt="">
                                                <input type="hidden" value=' . $ligne['id_Utilisateur'] . '>
                                            </div>
                                            <p class="auto_body_name">Favoris</p>
                                    </div>
                                    <div class="icone" name="blacklist">
                                            <div class="cf-results-top-iconBG cf-results-top-phone blacklist">
                                                <img src="../IMG/Img_Profil/B1.png" class="blacklist_vide"/>
                                                <img style="display:none" src="../IMG/Img_Profil/B2.png" />
                                                <input type="hidden" value=' . $ligne['id_Utilisateur'] . '>
                                            </div>
                                            <p class="auto_body_name">Blacklist</p>
                                    </div>
                
                                </div>
                
                            </div>
                            <div class="cf-blank-10"></div>
                        <div class="cf-blank-10"></div>
                        <div class="cf-blank-10"></div>';
                    } else {
                        echo '
                    <div class="cf-results-profil">
                    <div id="Zone_profil_img">
                        <div><img src="../IMG/Img_Profil/logo1233.png" style="width:90px;height:80px;" alt=""></div>
                    </div>
                    <div id="Zone_infos">
                        <h3>' . $ligne['Nom'] . '  ' . $ligne['Prenom'] . ' </h3>
                        <div class="cf-blank-10"></div>
                        <h5>' . $ligne['Email'] . ' </h5>
                        <div class="cf-blank-10"></div>
                        <h5>' . $ligne['Telephone'] . '</h5>
                        <div class="cf-blank-10"></div>
                    </div>
                    <div id="Zone_icone">
                        <div class="icone" name="fav">
                                <div class="cf-results-top-iconBG cf-results-top-heart red-heart"  >
                                    <img  class="BH" src="../IMG/Img_Profil/64px-Ei-heart.png" width="50px" height="auto" alt="" class="Ceour_vide">
                                    <img style="display:none" class="RH" src="../IMG/Img_Profil/heart.png" width="35px" height="auto" alt="">
                                    <input type="hidden" value=' . $ligne['id_Utilisateur'] . '>
                                </div>
                                <p class="auto_body_name">Favoris</p>
                        </div>
                        <div class="icone" name="blacklist">
                                <div class="cf-results-top-iconBG cf-results-top-phone blacklist">
                                    <img src="../IMG/Img_Profil/B1.png" class="blacklist_vide"/>
                                    <img style="display:none" src="../IMG/Img_Profil/B2.png" />
                                    <input type="hidden" value=' . $ligne['id_Utilisateur'] . '>
                                </div>
                                <p class="auto_body_name">Blacklist</p>
                        </div>
    
                    </div>
    
                </div>
                <div class="cf-blank-10"></div>
            <div class="cf-blank-10"></div>
            <div class="cf-blank-10"></div>';
                    }
                }
            }
            ?>
            <div class="cf-blank-10"></div>
            <div class="cf-blank-10"></div>
        </section>

        <div class="cf-blank-50"></div>
        <div class="cf-blank-50"></div>
        <div class="cf-blank-50"></div>
        <div class="cf-blank-50"></div>
        <!-- Fin Liste contacts ------------------------------------------------------ -->

        <!-- Liste Vide  -->

        <div class="cf-notFoundPage">
            <div>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.172 16.172C9.92211 15.4221 10.9393 15.0009 12 15.0009C13.0607 15.0009 14.0779 15.4221 14.828 16.172M9 10H9.01M15 10H15.01M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" stroke="#0D0C22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div>Aucun contenu trouvé</div>
        </div>
    </div>


    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $('.red-heart').each(function(i, e) {

            $(this).click(() => {
                let visible = document.getElementsByClassName('red-heart')[i].children[0].style.display == 'none';
                let id_client = document.getElementsByClassName('red-heart')[i].children[2].value;
                // console.log(id_client);
                $.post("client_traitement.php", {
                    visible: visible,
                    id_client: id_client

                }, function(resp) {
                    console.log(resp);
                });


                if (visible) {
                    document.getElementsByClassName('red-heart')[i].children[0].style.display = 'block';
                    document.getElementsByClassName('red-heart')[i].children[1].style.display = 'none';
                } else {
                    document.getElementsByClassName('red-heart')[i].children[0].style.display = 'none';
                    document.getElementsByClassName('red-heart')[i].children[1].style.display = 'block';
                }
            });
        });
        $('.blacklist').each(function(i, e) {

            $(this).click(() => {
                var visible1 = document.getElementsByClassName('blacklist')[i].children[0].style.display == 'none';
                let id_client1 = document.getElementsByClassName('blacklist')[i].children[2].value;
                $.post("client_traitement.php", {
                    visible1: visible1,
                    id_client1: id_client1
                }, function(resp) {
                    console.log(resp);
                });
                if (visible1) {
                    document.getElementsByClassName('blacklist')[i].children[0].style.display = 'block';
                    document.getElementsByClassName('blacklist')[i].children[1].style.display = 'none';
                } else {
                    document.getElementsByClassName('blacklist')[i].children[0].style.display = 'none';
                    document.getElementsByClassName('blacklist')[i].children[1].style.display = 'block';
                }
            });
        });
    </script>