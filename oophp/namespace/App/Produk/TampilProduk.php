<?php

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