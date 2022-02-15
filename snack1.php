<?php 
// Snack 1
// Creare un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e
// punti fatti dalla squadra ospite.

$arrGiornata = [
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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>
            <?php echo $arrGiornata[0]["home"] ?> - <?php echo $arrGiornata[0]["away"]?> | 
            <?php echo $arrGiornata[0]["homeScore"]?> - <?php echo $arrGiornata[0]["awayScore"]?>
        </p>
        <p>
            <?php echo $arrGiornata[1]["home"] ?> - <?php echo $arrGiornata[1]["away"]?> | 
            <?php echo $arrGiornata[1]["homeScore"]?> - <?php echo $arrGiornata[1]["awayScore"]?>
        </p>
        <p>
            <?php echo $arrGiornata[2]["home"] ?> - <?php echo $arrGiornata[2]["away"]?> | 
            <?php echo $arrGiornata[2]["homeScore"]?> - <?php echo $arrGiornata[2]["awayScore"]?>
        </p>
        <p>
            <?php echo $arrGiornata[3]["home"] ?> - <?php echo $arrGiornata[3]["away"]?> | 
            <?php echo $arrGiornata[3]["homeScore"]?> - <?php echo $arrGiornata[3]["awayScore"]?>
        </p>
        <p>
            <?php echo $arrGiornata[4]["home"] ?> - <?php echo $arrGiornata[4]["away"]?> | 
            <?php echo $arrGiornata[4]["homeScore"]?> - <?php echo $arrGiornata[4]["awayScore"]?>
        </p>
    </body>
</html>


