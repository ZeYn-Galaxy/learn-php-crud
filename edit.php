<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include 'title.php' ?>


<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
        <?php
        include "./Operasi/connect-data.php";
        $sql = "SELECT * FROM user WHERE id = $_GET[id]";
        $results = $conn->query($sql);
        while ($row = $results->fetch_assoc()) {
            echo <<< end
                <form action="./Operasi/update.php?id=$_GET[id]" method="post">
                <div class="mb-3">
                <label for="inputNama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="inputNama" name="nama" value="$row[Nama_Siswa]">
                </div>
                <div class="mb-3">
                <label for="inputNisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="inputNisn" name="nisn" value="$row[NISN]">
                </div>
                <div class="mb-3">
                <label for="inputLahir" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="inputLahir" name="lahir" value="$row[Tanggal_Lahir]">
                </div>
                <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" name="alamat" value="$row[Alamat]">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="./Operasi/delete.php?id=$_GET[id]" class="btn btn-danger">DELETE</a>
                </form>
                end;
        }
        ?>
    </div>
</body>

</html>