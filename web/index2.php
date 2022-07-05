<?php 

    include_once '../lib/helpers.php';

if (isset($_SESSION['usu_nombre'])) {
    include_once '../view/Opto/head.php';

    echo "<div class='container'>";

    include_once '../view/Opto/optoIndex.php';
    

    if (isset($_GET['modulo'])){
        resolve();
    }

    include_once '../view/Opto/footer.php';
    
} else {
    redirect(getUrl1("Login","Login","getLogin"));
}
?>