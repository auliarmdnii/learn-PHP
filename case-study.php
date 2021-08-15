<?php
// first case
$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];
$total = array_sum(array_column($product,"qty"));
echo "Total Barang"." ".$total." | ";
// Menghitung jumlah harga yang dibeli
for ($i = 0; $i < count($product); $i++) {   
    echo $jumlah = $product[$i]['name']." ".$product[$i]['qty'] * $product[$i]['price']." | " ;
}
// "\n"
/** Second case
 * Buat fungsi untuk menghitung nilai bil.faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120
 */
function faktorial($x) {

    // membuat pengondisian
    if ($x==1) {
        return 1;
    } else {
        return $x * faktorial($x-1);
    }

}
echo "5! = ". faktorial(5);
?>