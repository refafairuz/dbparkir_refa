<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data parkir</h1>
    <a href="tambah.php">Tambah parkir baru</a>
    <table border="1">
        <tr>
            <th>no.</th>
            <th>ID Tempat</th>
            <th>Lokasi</th>
            <th>Harga Parkir</th>
            <th>aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * FROM tempat_parkir");
            $no=1;
            if(mysqli_num_rows($query)){
                
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['id_tempat']?></td>
                        <td><?php echo $result['lokasi']?></td>
                        <td><?php echo $result['harga_parkir']?></td>>
                        <td>
                            <a href="">Edit |</a>
                            <a href="">Hapus</a>
                        </td>
                    </tr>
                <?php
                $no++;
                }
            } else{
                echo "Data kosong";
            }
            ?>
    </table>
</body>
</html>
