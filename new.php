<?php

class Makanan {

    public  $nama, $rasa, $teknik, $berat, $harga;

    public function __construct( $nama = "nama", $rasa = "rasa", $teknik = "teknik", $berat = "berat", $harga = 0) {

        $this->nama = $nama;
        $this->rasa = $rasa;
        $this->teknik = $teknik;
        $this->berat = $berat;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->rasa, $this->teknik, $this->berat";

    }

    public function getMakanan() {

        $str = "{$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class Fashion {

    public  $merk, $warna, $model, $tipe, $ukuran, $harga;

    public function __construct( $merk = "merk", $warna = "warna", $model = "model", $tipe = "tipe", $ukuran = "ukuran", $harga = 0) {

        $this->merk = $merk;
        $this->warna = $warna;
        $this->model = $model;
        $this->tipe = $tipe;
        $this->ukuran = $ukuran;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->warna, $this->model";

    }

    public function getTipeFashion() {

        $str = "{$this->merk} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}


class Mie extends Makanan {

    public function getInfoMakanan() {
        $str = "Mie = {$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Snack extends Makanan {

    public function getInfoMakanan() {
        $str = "Snack = {$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Pashmina extends Fashion {

    public function getInfoFashion() {
        $str = "Pashmina   =  {$this->getlabel()} , {$this->merk} , {$this->tipe} , {$this->ukuran} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class Paris extends Fashion {

    public function getInfoFashion() {
        $str = "Paris = {$this->getlabel()} , {$this->merk} , {$this->tipe} , {$this->ukuran} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfoMakanan {

    public function cetak(Makanan $Makanan){
        $str = "{$Makanan->nama} {$Makanan->getlabel()} (Rp. {$Makanan->harga})";
        return $str;
    }

}

class CetakInfoFashion {

    public function cetak(Fashion $Fashion){
        $str = "{$Fashion->merk} {$Fashion->getlabel()} , Rp. {$Fashion->harga} ";
        return $str;
    }

}

$Makanan1 = new Mie("Indomie", "Asin", "Rebus", "250 g", 8000);
$Makanan2 = new Mie("Lemonilo", "Manis", "Goreng", "300 g", 150000);
$Makanan3 = new Snack("Dadar Gulung", "Manis", "Teflon", "1 kg", 35000);
$Makanan4 = new Snack("Nagasari", "Gurih", "Kukus", "1 Kg", 55000);

$Fashion1 = new Pashmina("RnW", "Cream", "Panjang", "Remaja", "L",  20000);
$Fashion2 = new Pashmina("Wearsy", "Mocca", "Pendek", "Dewasa", "XL",  30000);
$Fashion3 = new Paris("Saudia", "Putih", "Pendek", "Dewasa", "XL", 40000);
$Fashion4 = new Paris("Umama", "Hitam", "Panjang", "Remaja", "M", 50000);

echo $Makanan1->getInfoMakanan();
echo "<br>";
echo $Makanan2->getInfoMakanan();
echo "<br>";
echo $Makanan3->getInfoMakanan();
echo "<br>";
echo $Makanan4->getInfoMakanan();
echo "<hr>";
echo $Fashion1->getInfoFashion();
echo "<br>";
echo $Fashion2->getInfoFashion();
echo "<br>";
echo $Fashion3->getInfoFashion();
echo "<br>";
echo $Fashion4->getInfoFashion();
echo "<hr>";


?>  ` 