<?php
    session_start();
    function redirect($url){
        echo "<script type='text/javascript'>" 
        ."window.location.href='$url'"
        ."</script>";
    }

    function dd($var){
        echo "<prev>";
        die(print_r($var));
    }

    function getUrl ($modulo, $controlador, $funcion, $parametros=false, $pagina=false){

        if ($pagina==false) {
            $pagina="index3";
        }

        $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

        if ($parametros!=false) {
            foreach ($parametros as $key => $value){
                $url.="&$key=$value";
            }
        }

        return $url;
    }

    function getUrl2 ($modulo, $controlador, $funcion, $parametros=false){

        $url="index2.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

        if ($parametros!=false) {
            foreach ($parametros as $key => $value){
                $url.="&$key=$value";
            }
        }

        return $url;
    }

    function getUrl1 ($modulo, $controlador, $funcion, $parametros=false){

        $url="index.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

        if ($parametros!=false) {
            foreach ($parametros as $key => $value){
                $url.="&$key=$value";
            }
        }

        return $url;
    }

    function resolve(){
        //modulo: carpeta
        //controlador: archivo dentro de la carpeta modulo
        //funcion: método dentro del controlador

        $modulo=ucwords($_GET['modulo']);
        $controlador=ucwords($_GET['controlador']);
        $funcion=$_GET['funcion'];

        if (is_dir("../controller/$modulo")){
            if (is_file("../controller/$modulo/".$controlador."Controller.php")){

                include_once "../controller/$modulo/".$controlador."Controller.php";

                $nombreClase = $controlador."Controller";
                $objeto = new $nombreClase();

                if (method_exists($objeto,$funcion)){
                    $objeto->$funcion();
                } else {
                    echo "La funcion no existe";
                }
            } else {
                echo "El controlador no existe";
            }
        } else {
            Echo "El modulo no existe";
        }
    }

?>