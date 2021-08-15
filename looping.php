<?php 
// looping basic
$people = [
    ["name" => "Aulia", "askot" => "Nganjuk"],
    ["name" => "Tayo", "askot" => "Malang"],
    ["name" => "Waluyo", "askot" => "Surabaya"],
];
for ($i = 0 ; $i < count($people); $i++) { 
    echo $people[$i]["name"]." ".$people[$i]["askot"]." | ";
}
?>