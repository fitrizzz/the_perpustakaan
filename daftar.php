<?php
include "conn.php";
include "fungsi.php";
if (isset($_POST["hantar"])) {
    // echo "<script>alert('hore')</script>";
    $nama = $_POST["nama"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];

    if (semak($nama)) {
        echo "
            <div class='alert alert-danger' role='alert'>
                Usernama telah digunakan sila guna yang lain
            </div>
        ";
    } else {
        // echo "<script>alert('nope')</script>";
        $num = random();
        $sql = "INSERT INTO pengguna VALUES('','$nama','$pass','$email',$num";
        mysqli_query($conn,$sql);

        echo "
            <div class='alert alert-success' role='alert'>
                Berjaya daftar. Sila login
            </div>
    ";
    }
}
?>
<html>
<style>
    .card {
        /* background-color: blueviolet; */
        margin: auto;
        width: 20%;
        margin-top: 10%;
    }
</style>

<body>
<?php include "login_nav.php" ?>
    
    <div class="card text-center" style="width: 30%;">
        <div class="card-header">
            DAFTAR
        </div>
        <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5> -->
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <form action="daftar.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Usernama</span>
                    <input type="text" name="nama" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                    <input type="text" name="pass" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="email" name="email" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <button type="submit" name="hantar" class="btn btn-primary btn-sm">DAFTAR NAW</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            <a href="login.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Login</a>
            <a href="daftar.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Daftar</a>
        </div>
    </div>
</body>

</html>