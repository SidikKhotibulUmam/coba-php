<?php

class data{
    var $name;
    var $umur;
    var $kesibukan;
    var $pekerjaan;
    var $asal;
    function diriku(){
        for ($this->umur; $this->umur <= 26; $this->umur++) {
            echo "<br>Selamat Ulang Tahun ke $this->umur";


        }

    }


}

$identitasku = new  data();

$identitasku->name = "Sidik Khotibul Umam";
$identitasku->asal= "Kalimantan";
$identitasku->kesibukan = "Belajar Ngoding";
$identitasku->pekerjaan = "Mahasiswa";


echo "Nama      : $identitasku->name";
echo "<br>";
echo "Asal      : $identitasku->asal";
echo "<br>";
echo "Pekerjaan : $identitasku->pekerjaan";
echo "<br>";
echo "Kesibukan : $identitasku->kesibukan";
echo "<br>";



$identitasku->umur = 20;
echo $identitasku->diriku();



?>