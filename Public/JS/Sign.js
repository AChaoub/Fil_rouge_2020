// 
window.onload = () => {

    function menuOp() {
        const _MENU_CLOSE = document.getElementById('nav-close');
        const _MENU_OPEN = document.getElementById('nav-menu-icon');
        const _MENU = document.getElementById('nav-menu');
        let state = false;
        _MENU_OPEN.addEventListener('click', () => {
            _MENU_OPEN.style.display = 'none';
            if (!state) {
                _MENU.style.display = "flex";
                state = true;
            }
        });
        _MENU_CLOSE.addEventListener('click', () => {
            _MENU_OPEN.style.display = 'block';
            if (state) {
                _MENU.style.display = "none";
                state = false;
            }
        });
    }
    menuOp();




    var Tableau = document.getElementsByClassName('Upper');
    for (let i = 0; i < Tableau.length; i++) {
        Tableau[i].onkeyup = () => {
            Tableau[i].value = Tableau[i].value.toUpperCase();
        };
    }
    console.log(Tableau);
    let passw = document.getElementById("pass");
    let Cpassw = document.getElementById("Cpass");
    let Email = document.getElementById("Email");
    let CEmail = document.getElementById("CEmail");
    let Tel = document.getElementById("tel");
    let nom = document.getElementById("N");
    let prenom = document.getElementById("P");
    var ExpReg1 = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]{2,8}[.][a-zA-Z]{2,3}$/;
    var ExpReg2 = /^0[5-7]([-. ]?[0-9]{2}){4}$/;

    var btn = document.getElementById("BtnAd");
    var parag1 = document.getElementById("ParagVerf1");
    var parag2 = document.getElementById("ParagVerf2");
    var parag3 = document.getElementById("ParagVerf3");
    var parag4 = document.getElementById("ParagVerf4");
    var parag5 = document.getElementById("ParagVerf5");
    var parag6 = document.getElementById("ParagVerf6");

    passw.onkeyup = () => {
        if (passw.value.length > 0) {
            Cpassw.style.backgroundColor = "white";
            Cpassw.style.pointerEvents = "visible";
        } else {
            Cpassw.style.backgroundColor = "rgba(128, 128, 128, 0.411);";
            Cpassw.style.pointerEvents = "none";
        }
    }
    passw.onblur = () => {
        if (RegExp(/[a-zA-Z0-9]/).test(passw.value) && passw.value.length >= 6 && RegExp(/\W|_/).test(passw.value)) {
            parag5.innerText = "Mot passe Fort ";
            parag5.style.color = "green";
        } else if (passw.value.length > 6) {
            parag5.innerText = "Mot passe faible et pour Rendre votre mot de passe Fort cous ajouter un caractere speciale    ";
            parag5.style.color = "orange";
        } else {
            parag5.innerText = "Veuiller entrer 6caracteres ou plus";
            parag5.style.color = "red";
        }

    }
    Email.onkeyup = () => {
        if (Email.value.length > 0) {
            CEmail.style.backgroundColor = "white";
            CEmail.style.pointerEvents = "visible";
        } else {
            CEmail.style.backgroundColor = "rgba(128, 128, 128, 0.411);";
            CEmail.style.pointerEvents = "none";
        }
    }

    var Select = document.getElementById("annee");
    var x;
    Select.onchange = () => {
        x = 2020 - parseInt(Select.value);
        if (x < 18) {
            parag3.innerText = "Interdit vous étes encore petit !!!!!! ";
            parag3.style.color = "red";
        } else {
            parag3.innerText = "";
        }
    }
    /// Event clique
    btn.onclick = (e) => {
        console.log(document.getElementsByClassName('Upper'));
        if (ExpReg1.test(Email.value) == true && Email.value == CEmail.value && Email.value != "") {
            parag1.innerText = "la vérification Email été faite en succes ";
            parag1.style.color = "green";
        } else {
            parag1.innerText = "Réesayer encore une fois la remplissage + plus 6 caracteres ";
            parag1.style.color = "red";
            //e.preventDefault();
            return false;
        }
        if ((passw.value == Cpassw.value) && (passw.value != "") && (passw.value.length >= 6)) {
            parag2.innerText = "la vérification password été faite en succes ";
            parag2.style.color = "green";
        } else {
            parag2.innerText = "Verifier Mot de passe  ";
            parag2.style.color = "red";
            e.preventDefault();
        }
        if (ExpReg2.test(Tel.value) == true) {
            parag4.innerText = "Numero valide ";
            parag4.style.color = "green";
        } else {
            parag4.innerText = "Non valide Exemple (05)(06)xx xx xx xx";
            parag4.style.color = "red";
            e.preventDefault();
        }
        console.log(x);
        if (x < 18) {
            e.preventDefault();
        }
        if (nom.value.length <= 4 || nom.value == "" || prenom.value.length <= 4 || prenom.value == "") {
            e.preventDefault();
            parag6.innerText = "Remplissez le nom et prenom ";
            parag6.style.color = "red";
        }
    }
}