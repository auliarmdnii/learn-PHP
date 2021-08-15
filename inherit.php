<?php 
/** inheritance -> proses pewarisan atribut dan method dari superclass ke sub class */
class Lingkaran{
    /** atribut */
    public $r;

    /** method */
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getLuas(){
        return $this->r * $this->r * 3.14;
    }

    public function getKeliling() 
    {
        return $this->r * 2 * 3.14;
    }
}

class Tabung extends Lingkaran
{
    public $tinggi;
    /** keyword parent digunakan utk mengakses aribut atau method dari superclass */
    public function __construct($r, $t) 
    {
        parent::__construct($r);
        // $this->r = $r;
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        // 2*phi*r (r+t)
        return 2 * 3.14 * $this->r * ($this->r + $this->tinggi);
    }

    public function getVolume()
    {
        return parent::getLuas() * $this->tinggi;
    }
}

class Kerucut extends Lingkaran
{
    public $tinggi;
    /** keyword parent digunakan utk mengakses aribut atau method dari superclass */
    public function __construct($r, $t, $s)
    {
        parent::__construct($r);
        // $this->r = $r;
        $this->tinggi = $t;
        $this->selimut = $s;
    }

    public function getSelimut()
    {
        //phytagoras * r * tinggi
        // akar (r2 + t2)
        return sqrt($this->r * $this->r + $this->tinggi * $this->tinggi);
    }

    public function getLuas()
    {
        // phi*r (r+s)
        return 3.14 * $this->r * ($this->r + $this->getSelimut());
    }

    public function getVolume()
    {
        // 0.33*phi*r*r*t
        return 1/3 * parent::getLuas() * $this->tinggi;
    }
}

class Bola extends Lingkaran
{
    public $tinggi;
    public function __construct($r, $t)
    {
        parent::__construct($r);
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        // 4 * phi * r * r
        return 4 * parent::getLuas();
    }

    public function getVolume()
    {
        // 4/3 * phi * r * r * r
        return 4/3 * parent::getLuas() * $this->r;
    }
}


$gelas = new Tabung(10, 25);
echo nl2br("Luas Gelas: ".$gelas->getLuas()."\n");
echo nl2br("VOlume Gelas: ".$gelas->getVolume()."\n");

echo nl2br("=============="."\n");

$topi = new Kerucut(14, 55);
echo nl2br("Luas Topi: ".$topi->getLuas()."\n");
echo nl2br("Volume Topi: ".$topi->getVolume()."\n");

echo nl2br("=============="."\n");

$basket = new Bola(10, 25);
echo nl2br("Luas Basket: ".$basket->getLuas()."\n");
echo nl2br("Volume Basket: ".$basket->getVolume()."\n");
?>