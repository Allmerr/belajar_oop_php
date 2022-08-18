<?php

class Produk {
    public  $judul,
            $pembuat,
            $tahun,
            $ket;

    public function __construct($judul="judul" , $pembuat="pembuat", $tahun="tahun",  $ket="keterangan"){
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->tahun = $tahun;
        $this->ket = $ket;
    }

}

class TampilProduk {
    public function tampil(Produk $produk){
        return "$produk->judul dibuat oleh $produk->pembuat pada tahun $produk->tahun.<br/>";
    }
}

class Buku extends Produk {
    public function tampil(){
        return "Buku $this->judul dibuat oleh $this->pembuat pada tahun $this->tahun ($this->ket hallaman) <br/>";
    }
}

class Film extends Produk {
    public function tampil(){
        return "Film $this->judul dibuat oleh $this->pembuat pada tahun $this->tahun ($this->ket jam tayang) <br/>";
    }
}


$tampil = new TampilProduk();
$produk1 = new Buku("Harry Potter", "Jk. rowling", "1999" , "250");
$produk2 = new Film("Fight Club", "David fincher", "1999" , "2.5");



echo $produk1->tampil();
echo $produk2->tampil();




?>