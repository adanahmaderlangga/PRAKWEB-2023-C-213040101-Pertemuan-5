<?php

require_once 'App/init.php';

// $produk1 =new Novel("Ada apa dibalik atap rumah", "boing", "Bukune", 45000, 60,);
// $produk2 =new Game("Tragedi 35 mei", "katak bhizer", "Scottgames", 350000, 30,);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();