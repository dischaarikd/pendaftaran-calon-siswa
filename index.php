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
    ?>
    <h2> DATA PENDAFTARAN CALON SISWA</h2>
    <br>
    <a href="tambah-calon-siswa.php">Tambah Data</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Agama</th>
            <th>Action</th>
        </tr>
        <?php
        $no =1;
        $query = "SELECT
                    calon_siswa.id_calon_siswa AS id_calon_siswa,
                    calon_siswa.nama_calon_siswa AS nama_calon_siswa,
                    calon_siswa.jenis_kelamin_calon_siswa AS jenis_kelamin_calon_siswa,
                    calon_siswa.asal_sekolah_calon_siswa AS asal_sekolah_calon_siswa,
                    calon_siswa.id_agama AS id_agama,
                    agama.nama_agama AS nama_agama
                  FROM
                    calon_siswa
                  INNER JOIN agama ON calon_siswa.id_agama = agama.id_agama
                 ";
        $data = mysqli_query($koneksi,$query);
        while ($calon_siswa = mysqli_fetch_array($data)) {
            $jenis_kelamin ='Laki-laki';
            if($calon_siswa['jenis_kelamin_calon_siswa'] == 'P'){
                $jenis_kelamin = 'Perempuan';
            }
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $calon_siswa['nama_calon_siswa']; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $calon_siswa['asal_sekolah_calon_siswa']; ?></td>
            <td><?php echo $calon_siswa['nama_agama']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $calon_siswa['id_calon_siswa'];?>">EDIT</a>
                <a href="action/delete.php?id=<?php echo $calon_siswa['id_calon_siswa'];?>">DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>