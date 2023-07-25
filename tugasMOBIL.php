<?php
    class mobil{
        public $merk = "toyota";
        public $tahun_produksi = 2018;
        public $warna = "putih";
        public $kecepatan = "100";

        public function start(){
            echo "mobil berjalan";
        }
        public function akselerasi(){
            echo "mobil akselerasi";
        }
        public function berhenti(){
            echo "mobil berhenti";
        }
    }

    $mobil1 = new mobil();
    echo $mobil1->merk;
    echo "<br>";
    echo $mobil1->tahun_produksi;
    echo "<br>";
    echo $mobil1->warna;
    echo "<br>";
    echo $mobil1->kecepatan;
    echo "<br>";
    $mobil1->start();
    echo "<br>";
    $mobil1->akselerasi();
    echo "<br>";
    $mobil1->berhenti();
    echo "<br>";
    $mobil2 = new mobil();
    echo $mobil2->merk = "daihatsu";
    echo "<br>";
    echo $mobil2->tahun_produksi = 2001;
    echo "<br>";
    echo $mobil2->warna = "hitam";
    echo "<br>";
    echo $mobil2->kecepatan = "70";
    