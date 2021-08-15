<?php
// membuat variable berat
$berat = 44;
// membuat variable tinggi
$tinggi = 1.73;
// hitung BMI
$bmi = $berat / $tinggi * $tinggi;
// show number of BMI
if ($bmi < 18.5) {
    echo "Kekurangan Berat Badan";
} elseif ($bmi >= 18.5 && $bmi < 23) {
    echo "Berat Badan Normal";
} elseif ($bmi >= 23 && $bmi < 30) {
    echo "Kelebihan Berat Badan";
} elseif ($bmi > 30) {
    echo "Obesitas";
}
// show category
?>