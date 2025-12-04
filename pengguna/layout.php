<?php
    session_start();
?>

<html>

<link rel="stylesheet" href="../bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css">
<body>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">HI PENGGUNA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pengguna_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pengguna_senarai_buku.php">Senarai Buku</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pengguna_senarai_noti_buku.php">Notification</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pengguna_senarai_pulang_buku.php">Pulang Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pengguna_keluar.php">Keluar</a>
                        </li>

                    </ul>
                    <div id="cari_buku" style="width: 200px;">
                        <form action="" class="d-flex" role="search" style="margin: 10px;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: white; color: black;">
                            <button class="btn btn-outline-success" type="submit" style="color: black; background-color: aliceblue;">Search</button>
                        </form>
                    </div>
                    <!-- <div id="cari_noti_buku" style="width: 200px;">
                        <form class="d-flex" role="search" style="margin: 10px;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: white; color: black;">
                            <button class="btn btn-outline-success" type="submit" style="color: black; background-color: aliceblue;">Search</button>
                        </form>
                    </div> -->
                    <!-- <div id="cari_pulang_buku" style="width: 200px;">
                        <form class="d-flex" role="search" style="margin: 10px;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: white; color: black;">
                            <button class="btn btn-outline-success" type="submit" style="color: black; background-color: aliceblue;">Search</button>
                        </form>
                    </div> -->
                </div>
            </div>
        </nav>
        <script src="../bootstrap/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>