<?php
//array basic
// $siswa = ["Aulia","Oka","Rara","Aldo"];
// echo $siswa[1];

//array assosiative (array yang indeks nya string)
$people = [
    ["name" => "Keisha", "askot" => "Nganjuk"],
    ["name" => "Sherly", "askot" => "Bengkulu"],
    ["name" => "Aulia", "askot" => "Madiun"],
];
echo $people[2]["askot"];
?>