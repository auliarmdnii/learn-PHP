<?php
class PDAM{
    public $id, $nama, $jumlah_penggunaan, $admin = 10000;
    public function __construct($id, $nama, $jumlah_penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        if ($jumlah_penggunaan < 10) {
            $this->jumlah_penggunaan = 10;
        }
        else {
            $this->jumlah_penggunaan = $jumlah_penggunaan;
        }

    }
    public function getBiaya()
    {
        $tarif = 0;
        if ($this->jumlah_penggunaan < 10) {
            $tarif = 2000;
        }
        elseif ($this->jumlah_penggunaan > 10 && $this->jumlah_penggunaan <= 20) {
            $tarif = 3000;
        }
        elseif ($this->jumlah_penggunaan > 20 && $this->jumlah_penggunaan <= 30) {
            $tarif = 4000;
        }
        elseif ($this->jumlah_penggunaan > 30) {
            $tarif = 5000;
        }

        $hasil = $this->jumlah_penggunaan * $tarif + $this->admin;
        return $hasil;
    }
}

$pelanggan = [
    new PDAM(1, "Ali", 9),
    new PDAM(2, "Budi", 40),
    new PDAM(3, "Dani", 60),
    new PDAM(4, "Edi", 25),
    new PDAM(5, "Umar", 14)
];

for ($i=0; $i < count($pelanggan) ; $i++) { 
    echo nl2br("Pelanggan: ".$pelanggan[$i]->nama ." Biaya: ".$pelanggan[$i]->getBiaya()."\n");
}
?>