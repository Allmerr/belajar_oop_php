<?php

// overiding 

Class Produk {
    public  $judul,
            $tahun,
            $pembuat,
            $produksi;
    
    public function __construct($judul="judul",$tahun="tahun",$pembuat="pembuat",$produksi="produksi"){

        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->pembuat = $pembuat;
        $this->produksi = $produksi;

    }

    public function getLabel(){
        return "$this->pembuat | $this->produksi";
    }

    public function tampilData(){
        return "$this->judul ( {$this->getLabel()} )";
    }
}

class TampilProduk{
    public function tampil(Produk $produk){
        return "$produk->judul dibuat pada tahun $produk->tahun oleh $produk->pembuat diproduksi oleh $produk->produksi";
    }
}

class Film extends Produk{
    public $ket;

    public function __construct($judul="judul",$tahun="tahun",$pembuat="pembuat",$produksi="produksi",$ket="keteranagan"){
        parent::__construct($judul,$tahun,$pembuat,$produksi);
        $this->ket = $ket;
    }

    public function tampilData(){
        return "Film $this->judul dibuat disutradarai oleh $this->pembuat pada tahun $this->tahun diproduksi oleh $this->produksi ($this->ket hal).";
    }
}

class Buku extends Produk{
    public $ket;

    public function __construct($judul="judul",$tahun="tahun",$pembuat="pembuat",$produksi="produksi",$ket="keteranagan"){
        parent::__construct($judul,$tahun,$pembuat,$produksi);
        $this->ket = $ket;
    }

    public function tampilData(){
        return "Buku $this->judul dibuat dikarang oleh $this->pembuat pada tahun $this->tahun diproduksi oleh $this->produksi ($this->ket jam).";
    }
}

$tampilProduk = new TampilProduk();

$harry_potter = new Film("Harry Potter - batu bertuah",1999,"Jk. Rowling","Gramedia Pustaka","250");
$fight_club = new Buku("Fight Club",1999,"David Fincher","Universal Picture","2.5");
$sang_mahluk = new Produk("Sang Mahluk",2022,"kevin Almer");

// echo $tampilProduk->tampil($harry_potter);
// echo"<br/>";
// echo $tampilProduk->tampil($fight_club);

// echo $harry_potter->getLabel();
// echo"<br/>";
// echo $fight_club->getLabel();

echo $harry_potter->tampilData();
echo"<br/>";
echo $fight_club->tampilData();
echo"<br/>";
echo $sang_mahluk->tampilData();

?>