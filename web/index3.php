<?php 

    include_once '../lib/helpers.php';

if (isset($_SESSION['usu_nombre'])) {


    include_once '../view/Admin/head.php';

    echo "<div class='container'>";

    include_once '../view/Admin/indexAdmin.php';
    

    if (isset($_GET['modulo'])){
        resolve();
    }

    include_once '../view/Admin/footer.php';

} else {
    redirect(getUrl1("Login","Login","getLogin"));
}

?>