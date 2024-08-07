<?php
$data_pembelian = [
  [
    'bulan' => 'Januari',
    'jumlah_pengeluaran' => 7000,
  ],
  [
    'bulan' => 'Februari',
    'jumlah_pengeluaran' => 9000,
  ],
  [
    'bulan' => 'Maret',
    'jumlah_pengeluaran' => 5000,
  ],
  [
    'bulan' => 'April',
    'jumlah_pengeluaran' => 6000,
  ],
  [
    'bulan' => 'Mei',
    'jumlah_pengeluaran' => 3000,
  ],
  [
    'bulan' => 'Juni',
    'jumlah_pengeluaran' => 2000
  ],
];

$anggaran_pembelian = 5000;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container my-5">
    <h1>Anggaran : <?= $anggaran_pembelian ?></h1>  
    <table class="table table-bordered"> 
      <thead>
        <tr>
          <th scope="col">Bulan</th>
          <th scope="col">jumlah pengeluaran</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data_pembelian as $rekap): ?>
	      <tr class = "<?php if($rekap['jumlah_pengeluaran'] <= 5000) echo "table-danger" ?>">
            <td><?php echo $rekap['bulan']; ?></td>
		    <td><?php echo $rekap['jumlah_pengeluaran']; ?></td>
	      </tr>
          <?php endforeach ?>
      </tbody>
    </table>
  </div>

</body>

</html>


