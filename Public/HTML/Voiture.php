<?php

$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_v = " SELECT * FROM voiture";
$res_v = mysqli_query($conn, $sql_v);
$rows_v = mysqli_num_rows($res_v);
?>

<div class="cf-blank-50"></div>
<div class="container-custom cf-container-custom">
    <!-- Zone favoris haut -->
    <section class="favoris" style="display: none;">
        <div class="icone_fav icone_fav-active">
            <div>Liste Voitures</div>
        </div>
    </section>
    <div class="cf-blank-10"></div>
    <!-- Zone Nombre Clients -->
    <section class="NB_client-section">
        <div class="count_cl">
            <div class="count_cl_nbr"><?php echo $rows_v . '&nbsp' ?></div> <!-- &nbsp espace-->
            <div class="count_cl_profil"> Voitures</div>
        </div>
    </section>

    <div class="cf-blank-10"></div>

    <!-- Liste des contacts d'un admin precis -->
    <section class="cf-results-section"></section>
    <?php
    if ($rows_v < 1) {
        echo '<p style="text-align:center"> Aucun favoris à afficher</p>';
    } else {
        echo '<div id="Affichage_voiture" >
                    <div class="Voitures">';
        while ($ligne = $res_v->fetch_assoc()) {
            echo '
            <div class="Voiture">
                <div class="img_v" >
                    <img src="../IMG/Img_voiture/' . $ligne['img_v'] . '.png" width="80px" height="auto" alt="">
                </div>
                <div class="Modele"><p> ' . $ligne['Modele'] . '</p></div>
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
            <!-- <div class="Btns">
                                <div class="modif" value=""><img style="display:none" src="../IMG/Img_Profil/B2.png" />
                                </div>
                                <div class="effacer" value=""><img style="display:none" src="../IMG/Img_Profil/B2.png" />
                                </div>
                            </div>
                        </div> -->

        </div>

</div>

<?php
    }
?>
<div class="cf-blank-10"></div>
<div class="cf-blank-10"></div>
<!-- </section> -->

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
    // $('.red-heart').each(function(i, e) {

    //     $(this).click(() => {
    //         let visible = document.getElementsByClassName('red-heart')[i].children[0].style.display == 'none';
    //         let id_client = document.getElementsByClassName('red-heart')[i].children[2].value;
    //         // console.log(id_client);
    //         $.post("client_traitement.php", {
    //             visible: visible,
    //             id_client: id_client

    //         }, function(resp) {
    //             console.log(resp);
    //         });


    //         if (visible) {
    //             document.getElementsByClassName('red-heart')[i].children[0].style.display = 'block';
    //             document.getElementsByClassName('red-heart')[i].children[1].style.display = 'none';
    //         } else {
    //             document.getElementsByClassName('red-heart')[i].children[0].style.display = 'none';
    //             document.getElementsByClassName('red-heart')[i].children[1].style.display = 'block';
    //         }
    //     });
    // });
    // $('.blacklist').each(function(i, e) {

    //     $(this).click(() => {
    //         var visible1 = document.getElementsByClassName('blacklist')[i].children[0].style.display == 'none';
    //         let id_client1 = document.getElementsByClassName('blacklist')[i].children[2].value;
    //         $.post("client_traitement.php", {
    //             visible1: visible1,
    //             id_client1: id_client1
    //         }, function(resp) {
    //             console.log(resp);
    //         });


    //         if (visible1) {
    //             document.getElementsByClassName('blacklist')[i].children[0].style.display = 'block';
    //             document.getElementsByClassName('blacklist')[i].children[1].style.display = 'none';
    //         } else {
    //             document.getElementsByClassName('blacklist')[i].children[0].style.display = 'none';
    //             document.getElementsByClassName('blacklist')[i].children[1].style.display = 'block';
    //         }
    //     });
    // });
    // $('.modif').each(async function(i, e) {
    //     $(this).click(async () => {
    //         document.getElementsByClassName('Zone_modif')[i].style.display = 'block';
    //     });
    // });
    // // async function afficher() {
    // //     var x = await $.post('traitement_voiture.php', {}).promise();
    // //     $("#Affichage_voiture .Voitures").html(x);
    // // }
    // // afficher();
    // //--------------Event Click sur l'image Modifier



    //--------------Event Click pour valider La modification du prix d'une voiture X
    $('.btnmodif').each(function(i, e) {

        $(this).click(() => {
            let id_v = document.getElementsByClassName('Btns')[i].children[2].value;
            let prix = document.getElementsByClassName('prix')[i].value;
            document.getElementsByClassName('Zone_modif')[i].style.display = 'none';
            $.post("traitement_voiture.php", {
                id_v: id_v,
                prix: prix
            }, function(resp) {
                console.log(resp);
            });
            // await afficher();
        });
    });

    //------------ suppression voiture avec id selectionne
    $('.effacer').each(async function(i, e) {
        $(this).click(async () => {

                let id_supp = document.getElementsByClassName('Btns')[i].children[2].value;
                console.log(id_supp);
                $.post("traitement_voiture.php", {
                    id_supp: id_supp,
                });
            },
            function(resp) {
                console.log(resp);
            });
        // await afficher();
    });
    //-------------ajax
</script>