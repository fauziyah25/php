<?php
$wisata = [
    ["nama" => "Ragunan Jakarta", "lokasi" => "Jakarta", "Hari" => "senin - rabu", "foto" => "https://www.nativeindonesia.com/foto/2021/09/burung-pelikan-timor.jpg"],
    ["nama" => "Gunung Merapi", "lokasi" => "Magelang", "Hari" => "senin - rabu", "foto" => "https://awsimages.detik.net.id/community/media/visual/2020/11/06/penampakan-merapi-dari-kaliadem-2_169.jpeg"],
    ["nama" => "Gunung Tangkuban Parahu", "lokasi" => "Bandung", "Hari" => "senin - rabu", "foto" => "https://asset.kompas.com/crops/ilcgxQBDmeUuoES_SK8mjjhAEvU=/0x0:1000x667/750x500/data/photo/2022/06/27/62b946699ed13.jpg"],
  ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container my-5">
    <h1 class="text-center"> TRIP TO INDONESIA </h1>

    <div class="d-flex gap-5 justify-content-center mt-5">
    <?php foreach($wisata as $t) { ?>
      <div class="card" style="width: 18rem">
        <img src="<?= $t ["foto"]?>" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title"><?= $t['nama'] ?></h5>
          <p class="card-text">
            <? echo $t['lokasi']?>
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
  </div>
  <?php } ?>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php 
$jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun", "nilai" => 85],
        ["nama" => "fattah", "umur" => "19 tahun", "nilai" => 60],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun", "nilai" => 90],
          ["nama" => "marsina", "umur" => "20 tahun", "nilai" => 70],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun", "nilai" => 65],
          ["nama" => "Fariz", "umur" => "20 tahun", "nilai" => 80],
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container my-5">
    <h1>Data Siswa</h1>
    <?php foreach($jurusan as $data) { ?>
    <table class="table">
      <thead>
        <tr class= "table-secondary">
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Keterangan Nilai</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['siswa'] as $siswa) { ?>
        <tr class = "<?php if($siswa['nilai'] >= 75) echo "table-success"; else echo "table-danger" ?>">
          <td><?php echo $siswa ['nama']; ?></td>
          <td><?php echo $siswa ['umur']; ?></td>
          <td><?php echo $siswa ['nilai']; ?></td>
          <td>
            <?php 
            if($siswa['nilai'] >= 75 AND $siswa['nilai'] <= 100){
            echo "LULUS";
          }else{
            echo "REMEDIAL";
          } ?></td>
          <td>
            <?php
            if($siswa['nilai'] >= 90){
              echo "baik sekali";
            }else if($siswa['nilai'] > 80 AND $siswa['nilai'] < 90){
                echo "baik";
            }else if($siswa['nilai'] > 75 AND $siswa['nilai'] <= 80){
                echo "cukup";
            }else if($siswa['nilai'] < 75){
              echo "kurang";
            }
            ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>