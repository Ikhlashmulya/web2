<?php

class mahasiswa{

    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getMhs():string{
        return $this->nama . "<br>" . $this->nim . "<br>" . $this->jurusan;
    }
}

$mahasiswa1 = new mahasiswa("Ikhlash Mulyanurahman", "217200012", "Teknik Informatika");
echo $mahasiswa1->getMhs();
