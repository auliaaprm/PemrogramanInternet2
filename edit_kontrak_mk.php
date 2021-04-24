<?php
$matakuliah_id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_kontrak($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Kontrak Matakuliah Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Kontrak Matakuliah Mahasiswa</h1>
    <a href="kontrak_mk.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id Matakuliah</label>
        <br>
        <input type="text" name="matakuliah_id" value="<?php echo $data->matakuliah_id ?>">
        <br>
        <label>Id Mahasiswa</label>
        <br>
        <input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
        <br><br>
        <button type="submit" name="submit_edit_kontrak">Submit</button>
    </form>
</body>

</html>