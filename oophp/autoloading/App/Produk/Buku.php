<?php

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