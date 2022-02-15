<?php 
// Snack 1
// Creare un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e
// punti fatti dalla squadra ospite.

$matchDay = [
    [
        "home" => "Los Angels Lakers",
        "homeScore" => rand(50, 150),
        "away" => "Chicago Bulls",
        "awayScore" => rand(50, 150)
    ],
    [
        "home" => "Milwaukee Bucks",
        "homeScore" => rand(50, 150),
        "away" => "Brooklyn Nest",
        "awayScore" => rand(50, 150)
    ],
    [
        "home" => "Cleveland Calaviers",
        "homeScore" => rand(50, 150),
        "away" => "Detroit Pistons",
        "awayScore" => rand(50, 150)
    ],
    [
        "home" => "Houston Rockets",
        "homeScore" => rand(50, 150),
        "away" => "Golden State Warriors",
        "awayScore" => rand(50, 150)
    ],
    [
        "home" => "Boston Celtics",
        "homeScore" => rand(50, 150),
        "away" => "Portland Trail Blazers",
        "awayScore" => rand(50, 150)
    ]
];

// var_dump($arrGiornata)
//Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60
echo "<h1>Match Day 26</h1>";

for ($i = 0; $i < count($matchDay); $i++) {
    echo "<div>". $matchDay[$i]["home"] . " - " . $matchDay[$i]["away"] . " | " . $matchDay[$i]["homeScore"] . " - " . $matchDay[$i]["awayScore"] ."</div>";
}
?>


