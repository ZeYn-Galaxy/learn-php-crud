<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include 'title.php' ?>

<body>
    <?php
    include './Module/connect-data.php';

    $sql = "INSERT INTO user (id, Nama_Siswa, NISN, Tanggal_Lahir, Alamat) VALUES (NULL, '$_POST[nama]', '$_POST[nisn]', '$_POST[lahir]', '$_POST[alamat]')";

    if (mysqli_query($conn, $sql)) {
        echo <<< end
        <div class="alert alert-primary" role="alert">
        Sukses Input Data!
        </div>
        end;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>
    
</body>