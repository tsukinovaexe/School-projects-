<?php

$viesti = "Nimi: " . $_POST["nimi"] . "\n";
$viesti .= "Sähköposti: " . $_POST["email"] . "\n";
$viesti .= "Ikä: " . $_POST["ika"] . "\n";
$viesti .= "Palaute: " . $_POST["palaute"];

mail("mail@digikauppis.fi", "Palautelomake", $viesti);

echo "Palaute lähetetty!";

?>
