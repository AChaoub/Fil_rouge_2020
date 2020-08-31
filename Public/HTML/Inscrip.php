<?php
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// recuperer id_admin 
$sql_comp_admin = "SELECT * FROM admin_locar";
$res_comp_admin = mysqli_query($conn, $sql_comp_admin);
$comp_admin = mysqli_num_rows($res_comp_admin);
// recuperer id_client 
$sql_comp_client = "SELECT * FROM client";
$res_comp_client = mysqli_query($conn, $sql_comp_client);
$comp_client = mysqli_num_rows($res_comp_client);
if (isset($_POST['BtnInscrip'])) {
    $comp_client++;
    $ImgP = time() . '_' . $_FILES['Profil']['name'];
    $cible = '../IMG/Img_Profil/' . $ImgP;
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $telephone = htmlentities($_POST['telephone']);
    $annee = htmlentities($_POST['Annee']);
    $jours = htmlentities($_POST['Jours']);
    $mois = htmlentities($_POST['Mois']);
    //Test pour verifier les emails redendents .
    $sql_test_email = "SELECT * FROM client  WHERE Email='$email'";
    $res1 = mysqli_query($conn, $sql_test_email);
    $rows = mysqli_num_rows($res1);

    if ($rows < 1) {
        if (move_uploaded_file($_FILES['Profil']['tmp_name'], $cible)) {
            $sql = " INSERT INTO client (`id_Utilisateur`,`Nom`, `Prenom`, `Telephone`, `Email`, `MP`,`Annee`, `Jour`,`Mois`, `Image_util`) VALUES ($comp_client,'$prenom','$nom','$telephone','$email',' $password',$annee,$jours,$mois,'$ImgP')";
        } else
            $sql = " INSERT INTO client  (`id_Utilisateur`,`Nom`, `Prenom`, `Telephone`, `Email`, `MP`,`Annee`, `Jour`,`Mois`) VALUES ($comp_client,'$prenom','$nom','$telephone','$email',' $password',$annee,$jours,$mois)";
        mysqli_query($conn, $sql);
    } else  echo '<script>alert("Email existe deja")</script>';
}
?>




<?php echo $comp_admin;
echo $comp_client; ?>
<div id="imgP">
    <!-- <img src="../IMG/Img_voiture/home-page-right-figure-min.png" alt=""> -->
    <img src="../IMG/Img_voiture/cadillac.png" alt="">
</div>
<div class="blank"></div>
<form action="#" method="POST" enctype="multipart/form-data">
    <div id="Conts">
        <div id="Par1">
            <h1>Commencez à gagner des récompenses avec Car&Rent</h1>
            <h3>Inscription gratuite ! Réserver un véhicule n'a jamais été plus simple, rapide et intéressant</h3>
        </div>
        <div id="Par2">
            <p><span>✔</span> Fini l’attente au comptoir : votre contrat est déjà prêt à votre arrivée</p>
            <p><span>✔</span> Échangez vos points contre des journées de location offertes ou pour bénéficier du statut
                supérieur</p>
            <p><span>✔</span> Accédez aux statuts Elite au fil de vos locations.</p>
        </div>
    </div>
    <div class="blank"></div>
    <div id="Form">
        <img src="./IMG/black.png" alt="">
        <div class="blank"></div>
        <div id="div2">
            <input type="text" name="nom" class="Upper" id="N" placeholder="Nom(sans accent)*">
            <input type="text" name="prenom" class="Upper" id="P" placeholder="Préom(sans accent)*">
        </div>
        <div class="blank"></div>
        <input type="email" name="email" class="Upper In" id="Email" placeholder="Par Email*">
        <div class="blank"></div>
        <input type="email" class=" In" id="CEmail" placeholder="Confirmez votre Email*">
        <p id="ParagVerf1"></p>
        <div class="blank"></div>
        <input type="password" name="password" class="In" id="pass" placeholder="Mot de passe*">
        <div class="blank"></div>
        <input type="password" class="In " id="Cpass" placeholder="Confirmez votre mot de passe*">
        <p id="ParagVerf5"></p>
        <div class="blank"></div>
        <input type="tel" name="telephone" class="In Upper" placeholder="Télephone*" id="tel">
        <p id="ParagVerf4"></p>
        <div class="blank"></div>
        <div class="IMGUP">
            <div id="Upload_img">
                <input type="file" name="Profil" id="Fichier-img" class="In" />
                <label for="Fichier-img">
            </div>
        </div>
        <div class="blank"></div>

    </div>
    <div class="blank"></div>
    <div id="DateN">
        <p id="p1">Date de naissance</p>
        <p id="p2">Vous devez être âgé(e) d'au moins 21 ans pour vous inscrire</p>
        <div class="blank"></div>
        <div class="div3">
            <div class="Annee">
                <p>Année de naissance</p>
                <select name="Annee" class="Selec In" id="annee">
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                    <option value="1949">1949</option>
                    <option value="1948">1948</option>
                    <option value="1947">1947</option>
                    <option value="1946">1946</option>
                    <option value="1945">1945</option>
                    <option value="1944">1944</option>
                    <option value="1943">1943</option>
                    <option value="1942">1942</option>
                    <option value="1941">1941</option>
                    <option value="1940">1940</option>
                </select>
            </div>
            <div class="Annee">
                <p>Mois de naissance</p>
                <select name="Mois" class="Selec In">
                    <option value="1">JANVIER</option>
                    <option value="2">FEVRIER</option>
                    <option value="3">MARS</option>
                    <option value="4">AVRIL</option>
                    <option value="5">MAI</option>
                    <option value="6">JUIN</option>
                    <option value="7">JUILLET</option>
                    <option value="8">AOUT</option>
                    <option value="9">SEPTEMBRE</option>
                    <option value="10">OCTOBRE</option>
                    <option value="11">NOVEMBRE</option>
                    <option value="12">DECEMBRE</option>
                </select>
            </div>
            <div class="Annee">
                <p>Jour de naissance</p>
                <select name="Jours" class="Selec In">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
        </div>
        <p id="ParagVerf3"></p>
    </div>
    <div class="blank"></div>
    <div class="blank"></div>
    <p id="polit">Pour en savoir plus, consultez notre <span class="Acc"> Politique de confidentialité..</span></p>
    <div class="blank"></div>
    <div id="radio">
        <input type="radio" name="r1">
        <label for="huey" id="RadioPar"> Oui - Je souhaite recevoir des e-mails promotionnels de Hertz.</label>
    </div>
    <div class="blank"></div>
    <div id="radio">
        <input type="radio" name="r2" checked>
        <label for="huey" id="RadioPar"> J'ai lu et <span class="Acc"> j'accepte les Conditions générales
                .</span></label>
    </div>
    <div class="blank"></div>
    <input type="submit" value="S'INSCRIRE" id="BtnAd" name="BtnInscrip">
    <div class=" blank"></div>
</form>

</div>