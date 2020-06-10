<?php
/*Alle gegevens uit een array worden weergeven (ook in het url):
 * print_r($_GET);*/

/*Laat alleen het wachtwoord zien:
 * echo $_GET ['wachtwoord'];*/

/*GET & POST zijn associatieve arrays. POST verstuurd de gegevens in de header van het bestand, maar niet in de URL:
 * echo $_POST ['wachtwoord'];*/

/*OPDRACHT: DYNAMISCHE WEBSITE - Gebruik de 'if' method om erachter te komen of er nog een 'naam' ingevuld moet worden
if ($_POST ['voornaam'] == "") {
    echo "Je moet nog een naam invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
if ($_POST ['adres'] == "") {
    echo "Je moet nog een adres invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
if ($_POST ['email'] == "") {
    echo "Je moet nog een email invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
if ($_POST ['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
*/

/*Alle gegevens uit een array worden weergeven:
 * print_r($_GET);*/

//OPDRACHT: BEASTIES
/*echo $_POST weergeeft 1 element. (Weergeeft de gekozen optie)
echo $_POST['naturelist'];*/

/*'$_POST['naturelist']' wordt vervangen door de value van de opties in de lijst
echo "<img src='img/naturelist/".$_POST['naturelist'].".jpg'>";*/

/*print alle 'geselecteerde' opties
print_r($_POST['naturelist']);*/

/*//doorloop de array om de plaatjes te laten zien
foreach ($_POST['naturelist'] as $nature){
    echo "<img src='img/naturelist/".$nature.".jpg'>";
}*/

//Opdracht: login formulier + login-pagina function
$a = $_POST ['email'];
$b = $_POST['wachtwoord'];
$c = "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
$d = "welkom $c";
$e = "Sorry, geen toegang! $c";

if ($a == "piet@worldonline.nl" & $b == "doetje123" or $a == "klaas@carpets.nl" & $b == "snoepje777" or
    $a == "truushendriks@wegweg.nl" & $b == "arkiearkie201") {
    echo $d;
} else {
    echo $e;
};