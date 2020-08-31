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
</head>

<body>
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
            <div id="Con" onclick=window.location.href="./GA_client.php">
                <div id="Prf">
                    <img src="../IMG/Img_Site/user.png" alt="">
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