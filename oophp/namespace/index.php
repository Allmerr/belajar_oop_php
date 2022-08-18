<?php

require_once "App/init.php";

// $harry_potter = new Buku("Harry Potter - batu bertuah",1999,"Jk. Rowling","Gramedia Pustaka","150000","250");
// $fight_club = new Film("Fight Club",1999,"David Fincher","Universal Picture","90000","2.5");

// $tampil = new TampilProduk();
// $tampil->tambahDataProduk($harry_potter);
// $tampil->tambahDataProduk($fight_club);
// echo $tampil->tampil();

new App\Produk\User();
echo "<br/>";
new App\Service\User();