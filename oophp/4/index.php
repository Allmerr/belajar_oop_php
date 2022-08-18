<?php

class Produk {
    public  $judul,
            $pembuat,
            $tahun;

    public function __construct($judul="judul" , $pembuat="pembuat", $tahun="tahun"){
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->tahun = $tahun;
    }
}

class TampilProduk {
    public function tampil(Produk $produk){
        return "$produk->judul dibuat oleh $produk->pembuat pada tahun $produk->tahun.<br/>";
    }
}

$tampil = new TampilProduk();
$produk1 = new Produk("Harry Potter", "Jk. rowling", "1999");
$produk2 = new Produk("Fight Club", "David fincher", "1999");
// echo $tampil->tampil($produk1);
// echo $tampil->tampil($produk2);



?>