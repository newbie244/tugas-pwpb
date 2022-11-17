<?php 
    require_once ('_koneksi.php');
    $query = "SELECT * FROM siswa";
    $data_siswa = mysqli_query($conn, $query);
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once ('_css.php'); ?>
</head>
<body>

   <!-- mulai navbar -->
   <?php require_once '_header.php'; ?>
  <!-- awalan -->
  
    <!--tabel-->
    <div class="container">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data_siswa as $siswa) : ?>
            <tr>
                <td><?= $no; ?></td> 
                <td><?= $siswa['nama']; ?></td>
                <td><?= $siswa['nisn']; ?></td>
                <td><?= $siswa['jenis_kelamin']; ?></td>
                <td><?= $siswa['agama']; ?></td>
                <td>
                    <a href="_crud.php?id=<?= $siswa ['Id_siswa']; ?>" onclick="return confirm(`Apakah anda yakin ingin menghapus <?= $siswa['nama']; ?> dari daftar ?`)" class="badge btn btn-danger">Hapus</a>
                    <a href="ubah.php?id=<?= $siswa['Id_siswa']; ?>" class="badge btn btn-warning">Edit</a>
                </td>
                    
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
    </script>  
</body>
</html>