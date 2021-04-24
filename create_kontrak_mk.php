<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Kontrak Matakuliah Mahasiswa</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="kontrak_mk.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id Matakuliah</label>
        <br>
        <input type="text" name="matakuliah_id">
        <br>
        <label>Id Mahasiswa</label>
        <br>
        <input type="text" name="mhs_id">
        <br><br>
        <button type="submit" name="submit_simpan_kontrak">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>