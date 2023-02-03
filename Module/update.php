<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include '../title.php' ?>

<body>
    <?php
    include '../Module/connect-data.php';

    $sql = "UPDATE user SET Nama_Siswa='$_POST[nama]', NISN='$_POST[nisn]', Tanggal_Lahir='$_POST[lahir]', Alamat='$_POST[alamat]' WHERE id = $_GET[id]";

    if (mysqli_query($conn, $sql)) {
        echo <<< end
        <div class="alert alert-primary" role="alert">
        Sukses Update Data!
        <a href='../user-table.php' class="btn btn-primary">Table Data</a>
        </div>
        end;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>
    
</body>