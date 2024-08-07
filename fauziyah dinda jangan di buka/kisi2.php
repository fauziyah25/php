<?php
$data =
[
  "pemain" => [
    ["nama" => "marsina", "umur" => "18 tahun", "posisi" => "Bek"],
    ["nama" => "satria", "umur" => "18 tahun","posisi" => NULL],
    ["nama" => "fattah", "umur" => "20 tahun", "posisi" => NULL],
    ["nama" => "faiz", "umur" => "22 tahun", "posisi" => NULL],
    ["nama" => "shakira", "umur" => "17 tahun", "posisi" => "Kiper"],
    ["nama" => "adrian", "umur" => "21 tahun", "posisi" => "Stricker"],
  ],
]
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
    <h1>RPL Footbal Team's</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Posisi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data['pemain'] as $pemain): ?>
          <tr>
          <td><?php echo $pemain ['nama']; ?></td>
          <td><?php echo $pemain ['umur']; ?></td>
          <td><?php echo $pemain ['posisi']; ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>