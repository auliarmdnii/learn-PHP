<?php
$matriksA = [
    [6, 3, 2],
    [4, 2, 3]
];

$matriksB = [
    [1,2],
    [2,3],
    [3,1]
];

/**
 * $hasil = [
 * [18, 23]
 * [17, 17]
 * ]
 * 
 * 6*1 + 3*2 + 2*3
 */

for ($i=0; $i < count($matriksA) ; $i++) {
    // loop from 0 - 1 -> scanning baris matriks A
    for ($j=0; $j < count($matriksB[$i]) ; $j++ {
        // loop from 0 - 1 -> scanning kolom matriks B
        $hasil = 0;
        for ($k=0; $k < count($matriksA[$i]); $k++) { 
            // loop from 0 - 2 -> scanning tiap baris dari matriks A
            $hasil += $matriksA[$i][$k] * $matriksB[$k][$j];
        }
        echo $hasil." ";
    }
    echo nl2br("\n");
}

?>