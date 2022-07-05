<?php

include_once '../model/Usuario/UsuarioModel.php';


class UsuarioController {
    public function getInsert(){
        $obj = new UsuarioModel();

            $sql="SELECT u.usu_id, u.usu_docum, u.usu_nombre, u.usu_clave, u.rol_id, r.rol_id, r.rol_nombre  FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id";
            $usuarios=$obj-> consult($sql);

            
            $sql="SELECT * FROM roles";
            $roles=$obj->consult($sql);

            include_once '../view/usuario/Insert.php';
    }

    public function postInsert(){
        $obj = new UsuarioModel();

        $usu_docum=$_POST["usu_docum"];
        $usu_nombre=$_POST['usu_nombre'];
        $usu_clave=$_POST['usu_clave'];
        $rol_id=$_POST['rol_id'];
        $usu_id=$obj->autoincrement("usu_id","usuarios");

        $sql="INSERT INTO usuarios VALUES ('$usu_id','$usu_docum', '$usu_nombre','$usu_clave','$rol_id')";
        $ejecutar=$obj->insert($sql);

            if($ejecutar){

                redirect(getUrl("Usuario","Usuario","consult"));
            }
            else {
                echo "Hubo un error";
            }
    }

    public function consult(){
        $obj = new UsuarioModel();

        $sql="SELECT * FROM roles;";
        $roles=$obj->consult($sql);

        $sql="SELECT u.usu_id, u.usu_docum, u.usu_nombre, u.usu_clave, u.rol_id, r.rol_id, r.rol_nombre  FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id";
        $usuarios=$obj->consult($sql);

        include_once '../view/usuario/consult.php';

    }


    public function getUpdate(){
        $obj= new UsuarioModel();

        $usu_id=$_GET['usu_id'];

        $sql="SELECT * FROM usuarios WHERE usu_id=$usu_id";
        $usuarios=$obj->consult($sql);  

        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);

        include_once "../view/usuario/update.php";

    }

    public function postUpdate(){
        $obj= new UsuarioModel();

        $usu_id=$_POST['usu_id'];
        $usu_docum=$_POST['usu_docum'];
        $usu_nombre=$_POST['usu_nombre'];
        $usu_clave=$_POST['usu_clave'];
        $rol_id=$_POST['rol_id']; 
    
        $sql="UPDATE usuarios SET usu_docum='$usu_docum', usu_nombre='$usu_nombre', usu_clave='$usu_clave', rol_id='$rol_id' WHERE usu_id='$usu_id'";
        $ejecutar=$obj->update($sql);

        if($ejecutar){

            redirect(getUrl("Usuario","Usuario","consult"));
        } else {
            echo "Hubo un error";
        }
    }

    public function getDelete(){
        $obj= new UsuarioModel();

        $usu_id=$_GET['usu_id'];

        $sql="SELECT * FROM usuarios WHERE usu_id='$usu_id'";
        $usuarios=$obj->consult($sql);

        $sql="SELECT * FROM roles";
        $roles=$obj->consult($sql);

        include_once "../view/usuario/delete.php";

    }

    public function postDelete(){
        $obj= new UsuarioModel();

        $usu_id=$_POST["usu_id"];

        $sql="DELETE FROM usuarios WHERE usu_id='$usu_id'";
        $ejecutar=$obj->delete($sql);

        if($ejecutar){

            redirect(getUrl("Usuario","Usuario","consult"));
        } else {
            echo "Hubo un error";
        }
    }

    public function Buscar(){
        $obj=new UsuarioModel();
        $busqueda=$_POST['busqueda'];
        $busqueda2=$_POST['busqueda2'];

        $sql="SELECT * FROM roles;";
        $roles=$obj->consult($sql);

        $sql="SELECT * FROM usuarios WHERE usu_docum LIKE '%$busqueda%' AND usu_nombre LIKE '%$busqueda2%';";
        //$sql="SELECT * FROM usuarios WHERE usu_nombre LIKE '%$busqueda2%';";
        $usuarios=$obj->consult($sql);

        $result=mysqli_num_rows($usuarios);

        if ($result!=0) {
            include_once '../view/usuario/Buscar.php';
        }
        else{
            redirect(getUrl("Usuario","Usuario","consult"));
        }

    }
           
}


?>