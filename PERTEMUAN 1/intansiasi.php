<?php

    class anggotaOrmawa{
        public $nama;
        public $nim;
        public $jurusan;
    }


    $anggota1 = new anggotaOrmawa();

    $anggota1->nama = "Ikhlash Mulyanurahman";
    $anggota1->nim = "217200012";
    $anggota1->jurusan = "Teknik Informatika";

    echo "Nama : " . $anggota1->nama . "<br>" . 
            "NIM : " . $anggota1->nim . "<br>" . 
            "jurusan : " . $anggota1->jurusan . "<br>";

?>