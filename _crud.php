<?php
require_once ('_koneksi.php'); 

if (isset($_POST["input_siswa"])) {
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $query = "INSERT INTO siswa VALUES('','$nama','$nisn','$jenis_kelamin','$agama')";

    mysqli_query($conn, $query);

    header("location: table.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE from siswa where Id_siswa='$id'";
    mysqli_query($conn, $query);
    header("Location: table.php");
}


if(isset($_POST['ubah_siswa'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $query = "UPDATE siswa SET
              nama = '$nama',
              nisn = '$nisn',
              jenis_kelamin = '$jenis_kelamin',
              agama = '$agama'
              WHERE Id_siswa=$id
    ";
    mysqli_query($conn, $query);

    header("location: table.php");
}
?>

