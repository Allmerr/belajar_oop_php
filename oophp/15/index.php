<?php

interface TampilData {
    public function tampilData();
}


abstract Class Produk {
    public  $judul,
            $tahun,
            $pembuat,
            $produksi;

    protected $harga;
    
    public function __construct($judul="judul",$tahun="tahun",$pembuat="pembuat",$produksi="produksi",$harga="harga"){

        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->pembuat = $pembuat; 
        $this->produksi = $produksi;
        $this->harga = $harga;

    }
    
    public function tampilHarga(){
        return $this->harga;
    }

    abstract function getLabel();


}


class Film extends Produk implements TampilData{
    public $ket;

    public function __construct($judul="judul",$tahun="tahun",$pembuat="pembuat",$produksi="produksi",$harga="harga",$ket="keteranagan"){
        parent::__construct($judul,$tahun,$pembuat,$produksi,$harga);
        $this->ket = $ket;
    }

    public function tampilData(){
        return "Film $this->judul dibuat disutradarai oleh $this->pembuat pada tahun $this->tahun diproduksi oleh $this->produksi berharga percopy ~Rp.$this->harga ($this->ket jam). <br/>";
    }

    public function ubahHarga($hargaBaru){
        $this->harga = $hargaBaru;
    }

    public function getLabel(){
        return "$this->pembuat | $this->produksi";
    }
}

class Buku extends Produk implements TampilData{
    public $ket;

    public function __construct($judul="judul",$tahun="tahun",$pembuat="pembuat",$produksi="produksi",$harga="harga",$ket="keteranagan"){
        parent::__construct($judul,$tahun,$pembuat,$produksi,$harga);
        $this->ket = $ket;
    }

    public function tampilData(){
        return "Buku $this->judul dibuat dikarang oleh $this->pembuat pada tahun $this->tahun diproduksi oleh $this->produksi berhraga perbuku ~Rp.$this->harga ($this->ket halaman). <br/>";
    }

    public function getLabel(){
        return "$this->pembuat | $this->produksi";
    }
}

class TampilProduk{
    public $dataProduk = [];

    public function tambahDataProduk( Produk $newProduk ){
        $this->dataProduk[] = $newProduk;
    }

    public function tampil (){
        $str = "DAFTAR PRODUK .. <br/>";
        foreach($this->dataProduk as $p){
            $str .= $p->tampilData();
        }
        return $str;
    }

}


$harry_potter = new Buku("Harry Potter - batu bertuah",1999,"Jk. Rowling","Gramedia Pustaka","150000","250");
$fight_club = new Film("Fight Club",1999,"David Fincher","Universal Picture","90000","2.5");

$tampil = new TampilProduk();
$tampil->tambahDataProduk($harry_potter);
$tampil->tambahDataProduk($fight_club);
echo $tampil->tampil();

?>