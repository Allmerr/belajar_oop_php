<?php

class Film {
    public  $nama,
            $sutradara,
            $tahun,
            $pemain;
            
    public function __construct($nama="nama-film" , $sutradara="nama-sutradara" , $tahun="tahun dibuat", $pemain="pemain1,pemain2"){
        $this->nama = $nama;
        $this->sutradara = $sutradara;
        $this->tahun = $tahun;
        $this->pemain = $pemain;

    }

}

Class TampilFilm{
    public function tampil(Film $film){
        return "film $film->nama disutradarai oleh $film->sutradara pada tahun $film->tahun dimainkan oleh $film->pemain.";
    }
}


$requim_for_dream = new Film("Requim for a dream","Darren Aronofsky","2000","jennifer conelly,jared letto");
$fight_club = new Film("fight club","David Fincher","1999","Brad pitt,Edward norton");
$tampilDataFilm = new TampilFilm();

echo $tampilDataFilm->tampil($requim_for_dream);
echo"<br/>";
echo $tampilDataFilm->tampil($fight_club);



?>