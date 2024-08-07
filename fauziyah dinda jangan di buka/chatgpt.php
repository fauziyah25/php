
<?php
$data = [
    "pemain" => [
        ["nama" => "marsina", "umur" => "18 tahun", "posisi" => "Bek"],
        ["nama" => "satria", "umur" => "18 tahun", "posisi" => NULL],
        ["nama" => "fattah", "umur" => "20 tahun", "posisi" => NULL],
        ["nama" => "faiz", "umur" => "22 tahun", "posisi" => NULL],
        ["nama" => "shakira", "umur" => "17 tahun", "posisi" => "Kiper"],
        ["nama" => "adrian", "umur" => "21 tahun", "posisi" => "Stricker"],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemain Bola</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Data Pemain Bola</h2>
    <div class="row">
        <div class="col-md-6">
            <h3>Pemain dengan Posisi</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Posisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['pemain'] as $pemain): ?>
                            <?php if ($pemain['posisi'] !== null): ?>
                                <tr>
                                    <td><?php echo $pemain['nama']; ?></td>
                                    <td><?php echo $pemain['umur']; ?></td>
                                    <td><?php echo $pemain['posisi']; ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>
</html>
