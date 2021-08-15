<?php
$person = [
    ["name" => "John Cena", "height" => 1.8, "weight" => 100],
    ["name" => "Undertaker", "height" => 1.75, "weight" => 80],
    ["name" => "Khali", "height" => 2.1, "weight" => 120],
    ["name" => "Bobby Leshley", "height" => 1.9, "weight" => 95],
];
Class Person {
    public $name, $weight, $height;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function countBMI() {
        $bmi = $this->weight / ($this->height * $this->height);
        return $bmi;
    }
    public function getCategory() {
        $bmi = $this->countBMI();
        if ($bmi < 18.5) {
            echo "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi < 23) {
            echo "Berat Badan Normal";
        } elseif ($bmi >= 23 && $bmi < 30) {
            echo "Kelebihan Berat Badan";
        } elseif ($bmi > 30) {
            echo "Obesitas";
        }
    }
}
// create object
$person1 = new Person("John Cena", 1.8, 100);
echo "BMI dari ".$person1->name." adalah ".$person1->countBMI();
echo " dengan kategori ".$person1->getCategory();

?>