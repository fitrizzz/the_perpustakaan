<?php 
    include "conn.php";

    function semak($nama){
        global $conn;

        $sql = "SELECT pengguna_nama FROM pengguna WHERE pengguna_nama = '$nama'";
        $result = mysqli_query($conn,$sql);

        $sql2 = "SELECT staff_nama FROM staff WHERE staff_nama = '$nama'";
        $result2 = mysqli_query($conn,$sql2);


        $resultf = (mysqli_fetch_assoc($result) OR mysqli_fetch_assoc($result2));
        
        return $resultf;
    }
function random(){
    $num = rand(1000,9999);
    return $num;

}

?>