<?php


// class ContohStatic {
//     public static $angka = 1;

//     public static function tampilHalo(){
//         return "halo " . ++self::$angka . " kali.<br/>";
//     }
// }

// echo ContohStatic::$angka; 
// echo "<br/>";
// echo ContohStatic::tampilHalo(); 
// echo ContohStatic::tampilHalo();
// echo ContohStatic::tampilHalo();
// echo ContohStatic::$angka;
// echo "<br/>";





class Contoh 
{
    public static $angka = 1;

    public function tampilHalo() {
        return "halo " . ++self::$angka . " kali.<br/>";
    }
}


$a = new Contoh();

echo $a->tampilHalo();
echo $a->tampilHalo();
echo $a->tampilHalo();


echo "<hr/>";

$b = new Contoh();

echo $b->tampilHalo();
echo $b->tampilHalo();
echo $b->tampilHalo();