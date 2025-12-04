<?php
    include "../conn.php";
    include "layout.php";
    include "../fungsi/fungsi_papar_buku.php";

?>
<html>
    <body>
        <div class="container">
            <?php buku_ada() ?>
        </div>
        <script>
            // document.getElementById("n").style.display = "none";
        </script>
    </body>
</html>