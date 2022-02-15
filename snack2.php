<?php 
// Snack 2
// Passare come parametri GET name, mail e age e verificare che name sia più lungo di
// 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
    echo "<p>Accesso riuscito.</p>";
} else {
    echo "<p>Accesso negato.</p>";
}
?>