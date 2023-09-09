<?php

$firstName = "Joshua";
$lastName = "de Bruijn";
$leerlingNummer = 1175421;
$age = 23;
$hobbies = ["Judo", "Kick boksen", "wind surfen", "golf surfen", "zeilen", "coding"];
$hasRelationship = true;
$favoriteFood = "bapao";
$favoriteSnack = "Pikanto";
$favoriteTeacher = "Silvie Roos";
$hatedTask = "kleding opvouwen";
$formatedHobbies = "";
$count = 1;
$hour = date('h');

// an if statement to adjust bg color if it reaches a certain time
if ($hour >=18) {
    echo "<style>* {
        background-color: pink;
        </style>";
} else {
    echo "<style>* {
        background-color: blue;
        </style>";
}


foreach($hobbies as $hobby) {
    if ($count < (count($hobbies) - 1)) {
        $formatedHobbies = $formatedHobbies . "$hobby, ";
    } else if($count == (count($hobbies) - 1)) {
        $formatedHobbies = $formatedHobbies . " $hobby en";
    } else {
        $formatedHobbies = $formatedHobbies . " $hobby";
    }
    $count++;
}

echo "Naam: $firstName $lastName<br>";
echo "Leerling nummer: $leerlingNummer<br>";
echo "Leeftijd: $age<br>" . PHP_EOL;
if ($hasRelationship) {
    echo "$hatedTask is niet meer nodig<br>";
} else {
    echo "$firstName moet $hatedTask<br>";
}
echo "lievelings eten is: $favoriteFood maar lievelings snakbar snack is $favoriteSnack<br>";
echo "favoriete leraar (liefde van mijn leven): $favoriteTeacher<br>";
echo "favoriete hobbies: $formatedHobbies<br>";



?>