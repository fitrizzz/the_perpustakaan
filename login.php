<?php
    require "conn.php";
    include "login_nav.php";
    require "fungsi/fungsi_login.php";  
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
    <div class="card text-center" style="width: 30%;">
        <div class="card-header">
            LOGIN
        </div>
        <form action="login.php" method="post">
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Usernama</span>
                        <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                        <input type="text" name="pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <button type="submit" name="hantar" class="btn btn-primary" >LOGIN NAW</button><br>
                    <a href="terlupa.php?lupa='pass'">Forget password?</a>
                    <a href="terlupa.php?lupa='nama'">Forget Usernama?</a>
        </div>
        </form>
        <div class="card-footer text-body-secondary">
            <a href="login.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Login</a>
            <a href="daftar.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Daftar</a>
        </div>
    </div>
</body>

</html>