<?php 

   /* include_once '../lib/conf/connection.php';

    $obj=new Connection(); */

    include_once '../lib/helpers.php';
    include_once '../view/partials/head.php';

    echo "<div class='container'>";

    include_once '../view/partials/inicio.php';
    

    if (isset($_GET['modulo'])){
        resolve();
    }

    include_once '../view/partials/footer.php';
    

?>