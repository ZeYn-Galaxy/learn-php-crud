<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include 'title.php' ?>


<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
        <form action="./Operasi/insert.php" method="post">
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="inputNama" name="nama">
            </div>
            <div class="mb-3">
                <label for="inputNisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="inputNisn" name="nisn">
            </div>
            <div class="mb-3">
                <label for="inputLahir" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="inputLahir" name="lahir">
            </div>
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>