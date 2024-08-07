<?php
class siswa {
    public $hewan;
    public $nama;
    public $kaki;
    public $mata;
    public $pupil;
    
    function __construct($hewan,$nama,$kaki,$mata,$pupil) {
        $this->hewan = $hewan;
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->mata = $mata;
        $this->pupil = $pupil;
    }  
        function pangil(){
        echo "kalau di panggil di cueek <br></br>";
    }

    }

    

$siswa = new siswa("kucing","kattie",4,"putih","hitam");

echo "Ini $siswa->hewan <br>";
echo "dia bernama $siswa->nama <br>";
echo "jumlah kakinya  $siswa->kaki <br>";
echo "warna mata nya  $siswa->mata <br>";
echo "warna pupilnya  $siswa->pupil <br>";
echo $siswa->pangil();
?>