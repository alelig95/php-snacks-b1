<!-- SNACK 1: -->
<?php

$matches = [
[
"squadraDiCasa" => "Olimpia Milano",
"squadraOspite" => "Dinamo Sassari",
"puntiSquadraDiCasa" => 78,
"puntiSquadraOspite" => 75,
],
[
"squadraDiCasa" => "Virtus Entella",
"squadraOspite" => "Cremona",
"puntiSquadraDiCasa" => 91,
"puntiSquadraOspite" => 83,
],
[
"squadraDiCasa" => "Sassari",
"squadraOspite" => "Perugia",
"puntiSquadraDiCasa" => 78,
"puntiSquadraOspite" => 84,
]
];

for ($i=0; $i < count($matches); $i++) { 
    echo $matches[$i]["squadraDiCasa"] . ' - ' . $matches[$i]["squadraOspite"] 
    . ' | ' . $matches[$i]["puntiSquadraDiCasa"] . ' - ' . $matches[$i]["puntiSquadraOspite"] . '<br/>';
}

echo '<br/>';

/* SNACK 2: */

$name = $_GET["name"];

$age = $_GET["age"];

$mail = $_GET['mail'];

if (strlen($name) > 3  && strpos($mail, '@') !== false && strpos($mail, '.') !==false && is_numeric($age) !== false) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}