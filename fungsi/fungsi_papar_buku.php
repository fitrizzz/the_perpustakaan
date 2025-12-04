<?php

function buku_ada(){ 
    global $conn?>
            <h2>senarai buku yang tersedia</h2>
        <table border="5px">
            <tr>1
                <th>buku id</th>
                <th>nama buku</th>
                <th>gambar</th>
                <th>detail
                <th>pinjam sekarang</th>
            </tr>
            
            
            <?php $sql1 = "SELECT * FROM buku WHERE status = 'tersedia' AND buku_id NOT IN
                            (SELECT buku_id FROM pinjam WHERE (status = 'noti_me' OR status = 'lulus' ) AND pengguna_id = '$pid')
                            $query";
                    $result1 = mysqli_query($conn,$sql1);
                    while($row = mysqli_fetch_assoc($result1)) { ?>
                        <tr>
                            <th><?php echo $row["buku_id"] ?></th>
                            <th><?php echo $row["nama_buku"] ?></th>
                            <th><img width='100px' src="imej/<?=$row['gambar']?>"></th>
                            <th><a href="p_buku_detail.php?bukuid=<?=$row["buku_id"]?>">DETAIL</a></th>
                            <th><a href="p_pinjam_buku.php?bukuid=<?=$row["buku_id"]?>">PINJAM</a></th>
                        </tr>
                    <?php } ?>
        </table>
<?php }