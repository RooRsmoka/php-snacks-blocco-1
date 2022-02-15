<?php 
// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere
// lo stesso numero più di una volta.
$numbers = [];

while (count($numbers) < 15) {
    $number = rand(1, 90);

    if (!in_array($number, $numbers)) {
        $numbers[] = $number;
    }
}
// var_dump($numbers)
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
        <h2>I tuoi numeri fortunati:</h2>
        <p>
            <?php for($i = 0; $i < 15; $i++) {
                echo "<div>". $numbers[$i] ."</div>";
            }
            ?> 
        </p>
    </body>
</html>