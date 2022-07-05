<?php

    include_once '../model/Generico/GenericoModel.php';
 
    class GenericoController {

        public function getInsert(){
            $obj = new GenericoModel();

            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];

            $sql = "SELECT * FROM $tabla";
            $generico = $obj-> consult($sql);

            include_once '../view/Generico/Insert.php';

        }

        public function postInsert(){
            $obj = new GenericoModel();
            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];
            $nombre=$_POST['nombre'];

            $id=$obj->autoincrement($campo."_id", $tabla);

            $sql="INSERT INTO $tabla VALUES ($id, '$nombre')";
            $ejecutar=$obj->insert($sql);

                if($ejecutar){

                    ?>
                    <script>
                       alert("Se registro correctamente");
                    </script> 
                   
                   <?php

                    redirect(getUrl("Generico","Generico","consult",array("tabla"=>$tabla, "campo"=>$campo)));
                }
                else {
                    echo "Hubo un error";
                }
        }

        public function getInsert2(){
            $obj = new GenericoModel();

            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];

            $sql = "SELECT * FROM $tabla";
            $generico = $obj-> consult($sql);

            include_once '../view/Generico/Insertar.php';

        }

        public function postInsert2(){
            $obj = new GenericoModel();
            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];
            $nombre=$_POST['nombre'];

            $id=$obj->autoincrement($campo."_id", $tabla);

            $sql="INSERT INTO $tabla VALUES ($id, '$nombre')";
            $ejecutar=$obj->insert($sql);

                if($ejecutar){

                    ?>
                    <script>
                       alert("Se registro correctamente");
                    </script> 
                   
                   <?php

                    redirect(getUrl2("Paciente","Paciente","getInsert"));
                }
                else {
                    echo "Hubo un error";
                }
        }

        public function consult(){
            $obj = new GenericoModel();

            $tabla=$_GET['tabla']; 
            $campo=$_GET['campo'];
            $campoId = $campo."_id";
            $campoNombre = $campo."_nombre";

            $sql="SELECT * FROM $tabla ORDER BY $campoId";
            $generico=$obj->consult($sql);

            include_once '../view/Generico/consult.php';

        }

        public function getUpdate(){
            $obj= new GenericoModel();
            
            $id=$_GET['id'];
            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];
            $campoId = $campo."_id";
            $campoNombre = $campo."_nombre";

            $sql="SELECT * FROM $tabla WHERE $id=$campoId";
            $generico=$obj->consult($sql);

            include_once "../view/Generico/update.php";

        }

        public function postUpdate(){
            $obj= new GenericoModel();

            $nombre=$_POST["nombre"];
            $id=$_POST['id'];
            $campo=$_POST['campo'];
            $tabla=$_POST['tabla'];
            $campoId = $campo."_id";
            $campoNombre = $campo."_nombre";

            $sql="UPDATE $tabla SET $campoNombre='$nombre' WHERE $campoId='$id'";
            $ejecutar=$obj->update($sql);

            if($ejecutar){

                ?>
                <script>
                   alert("Se edito correctamente");
                </script> 
               
               <?php

                redirect(getUrl("Generico","Generico","consult", array("tabla"=>$tabla, "campo"=>$campo)));
            } else {
                echo "Hubo un error";
            }
        }

        public function getDelete(){
            $obj= new GenericoModel();

            $id=$_GET['id'];
            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];
            $campoId = $campo."_id";
            $campoNombre = $campo."_nombre";

            $sql="SELECT * FROM $tabla WHERE $campoId=$id";
            $generico=$obj->consult($sql);

            include_once "../view/Generico/delete.php";

        }

        public function postDelete(){
            $obj= new GenericoModel();

            $id=$_POST["id"];
            $campo=$_POST['campo'];
            $tabla=$_POST['tabla'];
            $campoId = $campo."_id";

            $sql="DELETE FROM $tabla WHERE $campoId=$id";
            $ejecutar=$obj->delete($sql);

            if($ejecutar){

                ?>
                     <script>
                        alert("Se elimino correctamente");
                     </script> 
                    
                    <?php


                redirect(getUrl("Generico","Generico","consult", array("tabla"=>$tabla, "campo"=>$campo)));
            } else {
                echo "Hubo un error";
            }
        }

        public function filtro(){
            $obj = new GenericoModel();

            $buscar=$_POST['buscar'];
            $tabla=$_GET['tabla'];
            $campo=$_GET['campo'];
            $campoId = $campo."_id";
            $campoNombre = $campo."_nombre";

            $sql="SELECT * FROM $tabla WHERE $campoNombre LIKE '%$buscar%'";
            $generico=$obj->consult($sql);

            include_once '../view/Generico/filtro.php';
        }
            
    }
?>