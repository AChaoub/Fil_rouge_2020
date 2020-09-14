<?php

$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_v = " SELECT * FROM voiture";
$res_v = mysqli_query($conn, $sql_v);
$rows_v = mysqli_num_rows($res_v);
?>
<div id="sincrire" style="display: block;">
    <div id="ajout_voiture" style="width: 90%;
        height: 90%;
        margin-left: 5% ;
        margin-top : 2.5%;
        background-color: chartreuse;">
        <div style="display :flex ; justify-content: center;
        align-items: center;">
            <div>
                <img src="" alt="">
            </div>
            <input type="file">
        </div>
        <div>
            <p>Categorie : </p>
            <Select>
                <option value="MINI"></option>
                <option value="SEDAN"></option>
                <option value="COUPE"></option>
                <option value="PICKUP"></option>
                <option value="LUXE"></option>
            </Select>
        </div>
        <div>
            <p>MODELE: </p>
            <input type='text'>
        </div>
        <div>
            <p>PRIX</p>
            <input type='text'>
        </div>
        <div>
            <p>Portes</p>
            <input type='text'>
        </div>
        <div>
            <p>Transmission</p>
            <input type="radio">
            <label for="">A</label>
            <input type="radio">
            <label for="" value>M</label>
        </div>
        <div>
            <p>Climatisation</p>
            <input type='text'>
        </div>
        <div>
            <input type="button" value="AJOUTER">
        </div>

    </div>
</div>


<div class="cf-blank-50"></div>
<div class="container-custom cf-container-custom">
    <!-- Zone favoris haut -->
    <section class="favoris" style="display: none;">
        <div class="icone_fav icone_fav-active">
            <div>Liste Voitures</div>
        </div>
    </section>
    <div class="cf-blank-10"></div>
    <!-- Zone Nombre voitures -->
    <section class="NB_client-section">
        <div class="count_cl">
            <div class="count_cl_nbr"><?php echo $rows_v . '&nbsp' ?></div> <!-- &nbsp espace-->
            <div class="count_cl_profil"> Voitures</div>
        </div>
    </section>

    <div class="cf-blank-10"></div>

    <!-- Liste des voitures -->
    <section class="cf-results-section"></section>
    <?php
    if ($rows_v < 1) {
        echo '<p style="text-align:center"> Aucun favoris à afficher</p>';
    } else {
        echo '<div id="Affichage_voiture" >
                    <div class="Voitures">';
    ?>

        <div class="Voiture">
            <div class="img_ajout">
                <img src="../IMG/Img_voiture/ajout.png" width="80px" height="auto" alt="">
            </div>
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
    ////// Le code s'excute quand je ignore la fonction afficher et elle marche quand j'utilise affichage standard ----> prob de async et await 
    async function afficher() {
        var x = await $.post('traitement_voiture.php', {}).promise();
        $("#Affichage_voiture .Voitures").html(x);
    }
    afficher();
</script>