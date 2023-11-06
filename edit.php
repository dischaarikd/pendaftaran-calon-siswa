<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'koneksi.php';
        $id_calon_siswa = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE id_calon_siswa = $id_calon_siswa");
        while ($edit_calon_siswa = mysqli_fetch_array($data)) { ?>

            <h2> EDIT DATA CALON SISWA</h2>
            <br>

            <a href="index.php">Kembali</a>
            <br><br>

            <form action="action/update.php" method="POST">

                <input type="hidden" name="id_calon_siswa" value="<?php echo $id_calon_siswa; ?>">
                <label for="nama_calon_siswa">Nama Calon siswa:</label>
                <input type="text" name="nama_calon_siswa" id="nama_calon_siswa" value="<?php echo $edit_calon_siswa['nama_calon_siswa'];?>">
                <br><br>

                <label>Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin_calon_siswa" id="L" value="L" <?php if ($edit_calon_siswa['jenis_kelamin_calon_siswa'] == "L") echo "checked";?> >
                <label for="L">Laki-laki</label>
                <input type="radio" name="jenis_kelamin_calon_siswa" id="P" value="P" <?php if($edit_calon_siswa['jenis_kelamin_calon_siswa'] == "P") echo "checked"; ?> >
                <label for="P">Perempuan</label>
                <br><br>

                <label for="asal_sekolah_calon_siswa">Asal ekolah Calon Siswa:</label>
                <input type="text" name="asal_sekolah_calon_siswa" id="asal_sekolah_calon_siswa" value="<?php echo $edit_calon_siswa['asal_sekolah_calon_siswa'];?>">
                <br><br>

                <label for="agama_calon_siswa">Agama:</label>
                <select name="agama_calon_siswa" id="agama_calon_siswa">
                    <?php
                    $agama = mysqli_query($koneksi, 'SELECT * FROM agama');
                    while ($item_agama = mysqli_fetch_array($agama)) {
                    ?>
                        <option value="<?php echo $item_agama['id_agama']; ?>" <?php if($item_agama['id_agama'] == $edit_calon_siswa['id_agama']) echo "selected"; ?> >
                        <?php echo $item_agama['nama_agama']; ?>
                        </option>
                    <?php } ?>
                </select>
                <br><br>

                <input type="submit" value="Update Data">
            </form>
       
            <?php 
        } ?>
</body>
</html>