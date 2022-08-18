<?php

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