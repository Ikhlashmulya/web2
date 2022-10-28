<?php 
class manusia{
    public $nama_saya;

    function beriNama($namaSaya){
        $this->nama_saya = $namaSaya;
    }
}

class teman extends manusia{
    public $nama_teman;

    function beriNamaTeman($namaTeman){
        $this->nama_teman = $namaTeman;
    }
}

$ikhlash = new teman();
$ikhlash->beriNama("Ikhlash Mulyanurahman");
$ikhlash->beriNamaTeman("Muslim Abdul Jabbar");

echo "Nama Saya : " . $ikhlash->nama_saya . "<br>" . "Nama Teman : " . $ikhlash->nama_teman;































?>