<?php require_once ('_koneksi.php'); ?>
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
            <div class="mb-3">
            <label class="form-label">NISN :</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name ="nisn">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama :</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name ="nama">
            </div>
            <!-- <label for="inputstate" class="form-label">Kelas :</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected></option>
                <option value="1">X RA</option>
                <option value="2">X RB</option>
                <option value="3">X RC</option>
                <option value="1">XI RA</option>
                <option value="2">XI RB</option>
                <option value="3">XI RC</option>
                <option value="1">XII RA</option>
                <option value="2">XII RB</option>
                <option value="3">XII RC</option>
            </select> -->
            <label class="mt-3">Jenis Kelamin :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value ="laki laki">
                <label class="form-check-label" >
                Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value ="perempuan">
                <label class="form-check-label" >
                Perempuan
                </label>
            </div>
            <div class="col-md-4 mt-3">
                <label class="form-label">Agama :</label>
                <select class="form-select" name ="agama">
                    <option value="ISLAM">ISLAM</option>
                    <option value="KRISTEN">KRISTEN</option>
                    <option value="HINDU">HINDU</option>
                    <option value="BUDHA">BUDHA</option>
                    <option value="KONGHUCU">KONGHUCU</option>
                </select>
            </div>
            <!-- <label for="Alamat" class="mt-3" >Alamat :</label>
            <div class="mt-3">
            <textarea class="form-control" placeholder="Masukan alamat anda disini" id="floatingTextarea2" style="height:100px"></textarea>
            </div>
            <div class="mt-3">
            <p>Motivasi :</p>
           </div>
            <div class="editor">
            </div> -->
            <button type="submit" class="btn btn-primary my-4" name ="input_siswa">Submit</button>
        </form>
    </div>




<!-- <script src="ckeditor/src/ckeditor.js"></script> -->
<script src="ckeditor/build/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '.editor' ), {
	licenseKey: '',
    } );
</script>
</body>
</html>