<?php 

include "Human.php";

// vairabel data berupa array untuk menyimpan data mahasiswa
$data = array();

// input data
$masukan = new Mahasiswa("2106413", "Nadhief", "Laki-laki", "FPMIPA", "Ilmu Komputer", "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "00000000", "foto/1.jpeg");
array_push($data, $masukan);
$masukan = new Mahasiswa("2106413", "Nadhief", "Laki-laki", "FPMIPA", "Ilmu Komputer", "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "00000000", "foto/2.jpg");
array_push($data, $masukan);
$masukan = new Mahasiswa("2106413", "Nadhief", "Laki-laki", "FPMIPA", "Ilmu Komputer","Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "00000000", "Ilmu Komputer", "foto/3.jpeg");
array_push($data, $masukan);

for($i = 0; $i < sizeof($data); $i++){
    echo "NIK: " . $data[$i]->getNIK() . "<br/>";
    echo "Nama: " . $data[$i]->getNama() . "<br/>";
    echo "Jenis Kelamin: " . $data[$i]->getJenisKelamin() . "<br/>";
    echo "Asal Universitas: " . $data[$i]->getAsaluniv() . "<br/>";
    echo "Email Education: " . $data[$i]->getEmail() . "<br/>";
    echo "NIM: " . $data[$i]->getNIM() . "<br/>";
    echo "Fakultas: " . $data[$i]->getFakultas() . "<br/>";
    echo "Program Studi: " . $data[$i]->getProdi() . "<br/>";
}
?>