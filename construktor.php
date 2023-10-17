<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga ;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 =new Produk("Ada apa dibalik atap rumah", "boing", "Bukune", 45000);
$produk2 =new Produk("Tragedi 35 mei", "katak bhizer", "Scotgames", 350000);
$produk3 = new Produk ("Mamat Ujang");


echo  "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);