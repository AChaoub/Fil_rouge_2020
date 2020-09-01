<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/Acceuil.css">
    <link rel="stylesheet" href="../CSS/reservation.css">
    <link rel="stylesheet" href="../CSS/Compte.css">
    <link rel="stylesheet" href="../CSS/style-log.css">
    <link rel="stylesheet" href="../CSS/clientFavoris.css">
    <link rel="stylesheet" href="../CSS/GA_Voiture.css">
    <style>
        /* Style The Dropdown Button */
        .dropbtn {
            background-color: white;
            color: black;
            padding: 16px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            font-weight: 700;
            font-family: 'Nunito Sans';
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            font-weight: 600;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;

        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'Nunito Sans';
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #FF5F00;
            color: white;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #FF5F00;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    $conn = new mysqli("localhost", "root", "", "locar");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['BTNLOGIN'])) {
        $Email = $_POST['Em_log'];
        $Password = $_POST['Mp_log'];
        if ($Email && $Password) {
            // recherche email et password dans la table client 
            $sql_client = "SELECT * FROM client WHERE Email='$Email' AND MP='$Password'";
            $res_client = mysqli_query($conn, $sql_client);
            $rows_client = mysqli_num_rows($res_client);
            $ligne_client = mysqli_fetch_assoc($res_client);
            // recherche email et password dans la table admin 
            $sql_admin = "SELECT * FROM admin_locar WHERE Email_Ad='$Email' AND MP_Ad='$Password'";
            $res_admin = mysqli_query($conn, $sql_admin);
            $rows_admin = mysqli_num_rows($res_admin);
            $ligne_admin = mysqli_fetch_assoc($res_admin);
            if ($rows_admin == 1) {
                $_SESSION['id_admin'] = $ligne_admin["id_Admin"];
                echo '<script>alert("admin")</script>';
                header('Location:acceuil_Admin.php');
            }
            if ($rows_client == 1) {
                $_SESSION['id_client'] = $ligne_client["id_Utilisateur"];
                echo $_SESSION['id_client'];
                header('Location:Page_reservation_client.php');
            }
        }
    } ?>
    <form action="#" method="POST">
        <div id="sincrire">
            <div id="logoInscrip">
                <img src="../IMG/Img_Site/logo1233.png" alt="">
                <a href="javascript:cacherConn()">FERMER ⤫</a>
            </div>
            <div id="Inscrip">
                <div id="pan1">
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <p>EMAIL:</p>
                    <input class="input" type="text" id="Em" name="Em_log">
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <p>MOT DE PASSE:</p>
                    <input class="input" type="password" id="Mp" name="Mp_log">
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <div><input id="SeConn" name="BTNLOGIN" type="submit" value="SE CONNECTER"></div>
                </div>
                <div id="pan2">
                    <div class="blank"></div>
                    <p>Pas encore membre?</p>
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <p id="p1">Adhésion GRATUITE ! Grâce au programme CAR&RENT+ , la location de voiture n’a jamais été
                        aussi facile, rapide et avantageuse.</p>
                    <ul>
                        <li>C'est rapide</li>
                        <li>C'est Flexible</li>
                        <li>C'est facile</li>
                    </ul>
                    <div class="blank"></div>
                    <div><input id="Adherer" type="button" value="S'INSCRIRE" onclick=window.location.href="./Inscription.php">
                    </div>
                    <div class="blank"></div>
                </div>
            </div>
        </div>
    </form>

    <div id="header">
        <div id="ML">
            <div id="Menu">
                <img src="../IMG/Img_Site/open-menu.png" alt="">
            </div>
            <div id="Logo">
                <img src="../IMG/Img_Site/logo1233.png" alt="">
            </div>
        </div>
        <div id="RCP">
            <div id="Espace">
                <!-- <div id="Res"><span><a href="">RESERVATION</a> </span></div> -->
            </div>
            <div id="Con">
                <div class="dropdown">
                    <button class="dropbtn">Gestion ADMIN</button>
                    <div class="dropdown-content">
                        <a href="#">G Reservation</a>
                        <a href="#">G Voiture</a>
                        <a href="#">G Client</a>
                        <a href="#">Liste Favoris</a>
                        <a href="#">Liste Noire</a>
                        <a href="#">Déconnexion</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="MenuResp" style="background-color: white;">
            <div>
                <input type="checkbox" id="check">
                <div class="MenuRF">
                    <label for="check"><img class="menuimg" for="check" alt="walo" src="../IMG/Img_Site/open-menu.png"></label>
                    <img class="logo" src="../IMG/Img_Site/logo1233.png" alt="logo" width="180px">
                </div>
                <div class="MenuVer">
                    <div class="MV"><a href="C:\Users\Admin\Desktop\Brief-3\Accueil-Res\Accueil_Resp.html">ACCEUIL</a></div>
                    <div class="MV"><a href="C:\Users\Admin\Desktop\Brief-3\Accueil-Res\Safi.html">➤ RESERVATION</a></div>
                    <div class="MV"><a href="C:\Users\Admin\Desktop\Brief-3\Accueil-Res\Suivi.html"> ➤ SIGN/LOGIN</a></div>
                </div>

            </div>
        </div>

    </div>