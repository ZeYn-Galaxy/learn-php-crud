<!DOCTYPE html>
<html lang="en">
<?php $title = "CRUD";
include 'title.php' ?>

<body>
    <?php include 'navbar.php'?>
    <div class="container-fluid d-flex">
        <!-- TAMBAH DATA -->
        <div class="card ms-2" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">CREATE</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tambah Data Siswa</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="tambah-data.php?data=1" class="btn btn-primary">TAMBAH DATA</a>
            </div>
        </div>
        <br>
        <!-- READ DATA -->
        <div class="card ms-2" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">READ</h5>
                <h6 class="card-subtitle mb-2 text-muted">Baca Data Siswa</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="user-table.php" class="btn btn-primary">TABLE DATA</a>
            </div>
        </div>
    </div>
</body>

</html>