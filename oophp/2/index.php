<?php

class Film {
    public  $nama = "nama-film",
            $sutradara = "nama-sutradara",
            $tahun = "tahun dibuat",
            $pemain = "pemain1,pemain2";
            
    public function tampilData(){
        return "film $this->nama disutradarai oleh $this->sutradara pada tahun $this->tahun dimainkan oleh $this->pemain.";
    }
}

$requim_for_dream = new Film();
$requim_for_dream->nama = "Requim for a dream";
$requim_for_dream->sutradara = "Darren Aronofsky";
$requim_for_dream->tahun = "2000";
$requim_for_dream->pemain = "jennifer conelly,jared letto";

$fight_club = new Film();
$fight_club->nama = "fight club";
$fight_club->sutradara = "David Fincher";
$fight_club->tahun = "1999";
$fight_club->pemain = "Brad pitt,Edward norton";


echo $requim_for_dream->tampilData();
echo"<br/>";
echo $fight_club->tampilData();


?>