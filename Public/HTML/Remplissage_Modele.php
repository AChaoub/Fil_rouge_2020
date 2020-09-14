<?php
$conn = new mysqli("localhost", "root", "", "locar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//// requette recuperation libelle categorie

$sql_select_cat = "SELECT libelle FROM categorie";
$res_select_cat = mysqli_query($conn, $sql_select_cat);
$sql = " SELECT DISTINCT  voiture.Modele from categorie , voiture where voiture.id_cat = categorie.id_cat and categorie.libelle='LUXE'   ";
if (isset($_POST['categorie'])) {
    if ($_POST['categorie'] != 'Categorie') {
        // $categorie = "LUXE";
        $categorie = $_POST['categorie'];
        $sql .= "AND voiture.libelle =$categorie ";
    }
}
$resultat = $conn->query($sql);
echo '<select name="Categorie" class="Select Categorie" id="categ">
<option value="Categorie">CATEGORIE</option>
';
while ($ligne_cat = $res_select_cat->fetch_assoc()) {
?>
    <option value="<?php echo $ligne_cat['libelle']; ?>"><?php echo $ligne_cat['libelle']; ?></option>;
<?php
}
echo '</select>';
echo '<select name="Modele" Class="Select Modele">
    <option value="Modele">MODELE</option>';
while ($ligne = $resultat->fetch_assoc()) {
    echo '<option value=" ' . $ligne['Modele'] . ' ">' . $ligne['Modele'] . ' </option>';
}
echo '</select>';
?>