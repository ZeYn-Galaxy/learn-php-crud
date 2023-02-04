<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include 'title.php' ?>
<?php include './Operasi/connect-data.php' ?>

<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA SISWA</th>
                    <th>NISN</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>EDIT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM user";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo <<< res
                            <tr>
                            <td name="id">$row[id]</td>
                            <td>$row[Nama_Siswa]</td>
                            <td>$row[NISN]</td>
                            <td>$row[Tanggal_Lahir]</td>
                            <td>$row[Alamat]</td>
                            <td>
                            <a href="edit.php?id=$row[id]" class="btn btn-primary">EDIT</a>
                            </td>
                            </tr>
                            res;
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>