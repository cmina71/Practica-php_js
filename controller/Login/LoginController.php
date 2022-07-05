<?php 

    include_once '../model/Login/LoginModel.php';

    class LoginController {

        public function getLogin(){
            $obj = new LoginModel();

            $sql = "SELECT * FROM roles";
            $roles = $obj -> consult($sql);

            if (isset($roles)) {
                include_once '../view/partials/login.php';
            }
            
        }

        public function postLogin(){
            $obj = new LoginModel();

            $usu_docum=$_POST['usu_docum'];
            $usu_clave=$_POST['usu_clave'];
            $rol_id=$_POST['rol_id'];

            $sql = "SELECT * FROM usuarios WHERE usu_docum=$usu_docum AND usu_clave='$usu_clave' AND rol_id=$rol_id";
            $usuarios = $obj -> consult($sql);

            if (mysqli_num_rows($usuarios)>0) {
                foreach ($usuarios as $usu) {
                    $_SESSION['usu_id']=$usu['usu_id'];
                    $_SESSION['usu_docum']=$usu['usu_docum']; 
                    $_SESSION['usu_nombre']=$usu['usu_nombre'];
                    $_SESSION['rol_id']=$usu['rol_id'];
                }

                if ($rol_id==1) {
                    redirect(getUrl("Login","Login","indexAdmin"));
                } else {
                    redirect(getUrl2("Login","Login","indexOpto"));
                }
                
            }else{
                ?><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Credenciales incorrectas',
                    showConfirmButton: false,
                    timer: 2000
                })
                </script> <?php
            }    
        }

        public function indexAdmin(){
            require_once '../web/index3.php';
            require_once '../view/Vista/vistaIndex.php'; 
            ?><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Bienvenido al Sistema',
                        showConfirmButton: false,
                        timer: 2000
                    })
                </script> <?php
                $slepp = 5;              

        }

        public function indexOpto(){
            require_once '../web/index2.php';
            require_once '../view/Vista/vistaIndex.php'; 
            ?><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Bienvenido al Sistema',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script> <?php
        }

        public function cerrarSesion(){
            session_destroy();
            redirect(getUrl1("Login","Login","getLogin"));
        }
    }

?>