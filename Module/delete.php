<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include '../title.php' ?>

<body>
    <?php
    include '../Module/connect-data.php';

    $sql = "DELETE FROM user WHERE id = $_GET[id]";

    if (mysqli_query($conn, $sql)) {
        echo <<< end
        <div class="alert alert-danger" role="alert">
        Sukses Hapus Data!
        <a href='../user-table.php' class="btn btn-primary">Table Data</a>
        </div>
        end;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>
    
</body>