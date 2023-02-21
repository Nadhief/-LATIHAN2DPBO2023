<?php

/*Membuat kelas Human*/
class Human{
    /* class Human memiliki 3 atribut yaitu NIK, nama, dan jenis kelamin */
    private $NIK;
    private $nama;
    private $jenisKelamin;

    /* Konstruktor yang parameter nya berisi 3 atribut private */
    function __construct($nik, $nama, $jenisKelamin){
        $this->NIK = $nik;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
    }

    // Get NIK
    public function getNIK(){
        return $this->NIK;
    }
    // Get Nama
    public function getNama(){
        return $this->nama;
    }
    // Get Jenis Kelamin
    public function getJenisKelamin(){
        return $this->jenisKelamin;
    }

    // jangan lupa destruktor ditiap class
    function __destruct()
    {
        
    }
}

/*  class Sivitas Akademik anak dari class Human*/
class SivitasAkademik extends Human{
     /* class Sivitas Akademik memiliki 2 atribut yaitu asal unic dan email edu, class ini merupakan anak dari class Human */
    private $asalUniv;
    private $emailEdu;

    // Konstruktor yang parameternya berisi atribut orantuanya sekaligus atribut utamanya, agar class sivitasakademik dapat menggunakan atribut yang ada di orangtuanya dan juga merupakan syarat agar class sivitas akademik menjadi anaknya dari Human
    function __construct($nik, $nama, $jenisKelamin, $asalUniv, $emailEdu)
    {
        parent::__construct($nik, $nama, $jenisKelamin); // disini di panggil lagi buat jalanin fungsi gitu pokonya biar atributnya bisa di akses
        $this->asalUniv = $asalUniv;
        $this->emailEdu = $emailEdu;
    }

    // Get Asal Univ
    public function getAsaluniv()
    {
        return $this->asalUniv;
    }
    // Get Email Edu
    public function getEmail()
    {
        return $this->emailEdu;
    }
    // Destructor class sivitas akademik
    function __destruct()
    {
        
    }
}

/* class Mahasiswa anak dari class SivitasAkademik */
class Mahasiswa extends SivitasAkademik{
    // class ini memiliki 4 tribut utama yaitu NIM, fakultas, prodi, dan foto
    private $NIM;
    private $fakultas;
    private $prodi;
    private $foto;

    // Konstruktor yang parameternya merupakan semua atribut darii orangtua dan kakeknya si class mahasiswa karena memang aturannya seperti itu kalo mau jadi anak
    function __construct($nik, $nama, $jenisKelamin, $asalUniv, $emailEdu, $Nim, $fakultas, $prodi, $foto)
    {
        parent::__construct($nik, $nama, $jenisKelamin, $asalUniv, $emailEdu); // disini juga sama buat ngejalanin fungsi class gitu biar atribut nya bisa diakses
        $this->NIM = $Nim;
        $this->fakultas = $fakultas;
        $this->prodi = $prodi;
    }

    // Get Nim
    public function getNIM()
    {
        return $this->NIM;
    }
    // Get fakultas
    public function getFakultas()
    {
        return $this->fakultas;
    }
    // Get Prodi
    public function getProdi()
    {
        return $this->prodi;
    }
    // Get path Foto
    public function getFoto(){
        return $this->foto;
    }
    // Konstruktor class mahasiswa
    function __destruct()
    {
        
    }
}
?>