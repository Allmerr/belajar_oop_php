<?php

class Produk {
    public  $judul,
            $pembuat,
            $tahun,
            $tipe,
            $ket;

    public function __construct($judul="judul" , $pembuat="pembuat", $tahun="tahun", $tipe="tipe-film", $ket="keterangan"){
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->tahun = $tahun;
        $this->tipe = $tipe;
        $this->ket = $ket;
    }

    public function tampil (){
        if(strtolower($this->tipe) === "buku"){
            return "Buku $this->judul dibuat oleh $this->pembuat pada tahun $this->tahun ($this->ket hallaman) <br/>";
        }else if (strtolower($this->tipe) === "film") {
            return "Film $this->judul dibuat oleh $this->pembuat pada tahun $this->tahun ($this->ket jam tayang) <br/>";
        }
    }
}

class TampilProduk {
    public function tampil(Produk $produk){
        return "$produk->judul dibuat oleh $produk->pembuat pada tahun $produk->tahun.<br/>";
    }
}

$tampil = new TampilProduk();
$produk1 = new Produk("Harry Potter", "Jk. rowling", "1999" , "buku", "250");
$produk2 = new Produk("Fight Club", "David fincher", "1999" ,  "film", "2.5");
$produk3 = new Produk("Whiplash", "David fincher", "2014" ,  "film", "2");
$produk4 = new Produk("Pater pan", "James Barrie", "1904" , "buku", "230");


echo $produk1->tampil();
echo $produk2->tampil();
echo $produk3->tampil();
echo $produk4->tampil();



?>