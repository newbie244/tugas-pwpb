<?php 
require_once ('_koneksi.php'); 
$id = $_GET['id'];

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    } return $rows;
}

$query = "SELECT * FROM siswa WHERE id_siswa='$id'";
$siswa = query($query)[0];

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
    <!--navbar-->
   <?php require_once ('_header.php'); ?>

    <div class="container">
        <form action ="_crud.php" method ="POST">
            <input type="hidden" name="id" value="<?= $siswa['Id_siswa']; ?>">
            <div class="mb-3">
            <label class="form-label">NIS :</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name ="nisn" value="<?= $siswa['nisn'] ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama :</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name ="nama" value="<?= $siswa['nama']; ?>">
            </div>
            <label class="mt-3">Jenis Kelamin :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value ="laki laki" <?php if($siswa['jenis_kelamin'] === 'laki laki'){ echo "checked"; } ?>>
                <label class="form-check-label" >
                Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value ="perempuan" <?php if($siswa['jenis_kelamin'] === 'perempuan'){ echo "checked"; } ?>>
                <label class="form-check-label" >
                Perempuan
                </label>
            </div>
            <div class="col-md-4 mt-3">
                <label class="form-label">Agama :</label>
                <select class="form-select" name ="agama">
                    <option value="ISLAM" <?php if($siswa['agama'] === 'ISLAM'){ echo "selected='selected'"; } ?>>ISLAM</option>
                    <option value="KRISTEN" <?php if($siswa['agama'] === 'KRISTEN'){ echo "selected='selected'"; } ?>>KRISTEN</option>
                    <option value="HINDU" <?php if($siswa['agama'] === 'HINDU'){ echo "selected='selected'"; } ?>>HINDU</option>
                    <option value="BUDHA" <?php if($siswa['agama'] === 'BUDHA'){ echo "selected='selected'"; } ?>>BUDHA</option>
                    <option value="KONGHUCU" <?php if($siswa['agama'] === 'KONGHUCU'){ echo "selected='selected'"; } ?>>KONGHUCU</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-4" name ="ubah_siswa">Submit</button>
        </form>
    </div>

<script src="ckeditor/build/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '.editor' ), {
	licenseKey: '',
    } );
</script>
</body>
</html>