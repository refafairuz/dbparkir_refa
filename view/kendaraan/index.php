<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <h1>Data kendaraan</h1>
    <a href="tambah.php" class="btn btn-primary" width="20px">Tambah Kendaraan baru</a>
    <table border="1" class="table table-dark table-hover">
        <tr>
            <th>no.</th>
            <th>Plat no</th>
            <th>ID Tempat</th>
            <th>Waktu masuk</th>
            <th>Jenis kendaraan</th>
            <th>Merk kendaraan</th>
            <th>aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * FROM kendaraan");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['plat_no']?></td>
                        <td><?php echo $result['id_tempat']?></td>
                        <td><?php echo $result['waktu_masuk']?></td>
                        <td><?php echo $result['jenis_kendaraan']?></td>
                        <td><?php echo $result['merk_kendaraan']?></td>
                        <td>
                            <a href="" class="btn btn-warning">Edit |</a>
                            <a href="" class="btn btn-danger">Hapus</a>
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
    </div>
    
</body>
</html>
