<?php 
// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
// DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
// Stampare ogni data con i relativi post.

$posts = [
    "26-06-2020" => [
        "author" => "Albert Einstein",
        "text" => "EUREKA!! E = mc²."
    ],
    "15-03-2021" => [
        "author" => "Sherlock Holmes",
        "text" => "Elementary, my dear Watson!"
    ],
    "08-10-2021" => [
        "author" => "Dominic Toretto",
        "text" => "I live my life a quarter mile at a time."
    ]
];

foreach($posts as $key => $value) {
    echo "<h3>Data: $key</h3>";
    echo "<p>". $value["author"] ."</p>";
    echo "<p>". $value["text"] ."</p>";
}
?>