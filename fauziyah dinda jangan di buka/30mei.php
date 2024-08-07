<?php
class siswa {
    public $nama;
    public $kelas;
    public $umur;
    public $jabatan;

    function __construct($nama,$kelas,$umur,$jabatan) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->umur = $umur;
        $this->jabatan = $jabatan;
    }

    function membaca(){
        echo "Siswa sedang membaca <br></br>";
    }
}

$siswa = new siswa("siti",12,"rpl","presiden");
// $siswa->nama = "SITI";
// $siswa->kelas = 12;
// $siswa->jabatan = "PRESIDEN";
// $siswa->membaca();

echo "nama: $siswa->nama <br></br>";
echo "kelas: $siswa->kelas <br></br>";
echo "jabatan:  $siswa->jabatan ";
?>