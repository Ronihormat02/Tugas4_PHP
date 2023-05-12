<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'koneksi.php';

    $sql = "SELECT * FROM data_mahasiswa";
    $hasil = $koneksi->query($sql);
    ?>
<table border="1">
    <tr>
        <td>no</td>
        <td>nim</td>
        <td>nama</td>
        <td>jk</td>
        <td>jurusan</td>
    </tr>
    
    <?php
    if ($hasil->num_rows > 0){
        $i = 1;
        while ($baris = $hasil->fetch_assoc()){
            
            ?>
            <tr>
            <td><?= $i ?></td>
            <td><?= $baris['Nim'] ?></td>
            <td><?= $baris['nama'] ?></td>
            <td><?= $baris['jk'] ?></td>
            <td><?= $baris['jurusan'] ?></td>

        </tr>
        <?php
        $i++;
            

        }
    }
    ?>
</table>
</body>
</html>