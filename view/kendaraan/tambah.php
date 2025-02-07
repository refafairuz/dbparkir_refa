<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>tambah kendaraan</title>
</head>
<body>
    <div>
    <h1>tambah kendaraan</h1>
    <form action="simpan.php" method="POST">
        <label for="">Plat no</label>
        <input type="text" name="plat_no">
        <br>
        <label for="">ID Tempat</label>
        <input type="number" name="id_tempat">
        <br>
        <label for="">Waktu masuk</label>
        <input type="datetime" name="waktu_masuk">
        <br>
        <label for="">Jenis kendaraan</label>
        <input type="text" name="jenis_kendaraan">
        <br>
        <label for="">Merk kendaraan</label>
        <input type="text" name="merk_kendaraan">
        <br>
        <button type="submit">simpan</button>
    </form>
    </div>
</body>
</html>
