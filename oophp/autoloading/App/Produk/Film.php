<?php

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