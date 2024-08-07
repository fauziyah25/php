<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
    <div class="container my-5">
        <h1>Data Siswa</h1>
        <hr>
        <?php foreach ($jurusan as $j) :?>
        <h3><?= $j ["nama"] ?></h3>
    <table class="table">
        <thead>
            <tr <p class="table-success"></p>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Nilai Uas</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($j["siswa"] as $siswa) :?>
            <tr>
            <tr <p class="table-success"></p>
                <td><?= $siswa["nama"] ?></td>
                <td><?= $siswa["umur"] ?></td>
                <td><?= $siswa["nilai_uas"] ?></td>
                <?php if($siswa["nilai_uas"] >= 75){?>
                <td <p class="table-success"></p>lulus</td>
                <?php }else{?>
                <td>remedial</td>
                <?php } ?>
            </tr>
            <?php endforeach ?>

        </tbody>
    </table>

    <?php endforeach ?>
    
    </div>
</body>
</html>