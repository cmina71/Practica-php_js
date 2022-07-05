<?php 

    include_once '../model/Historia/HistoriaModel.php';

    class HistoriaController {

        public function getInsert(){
            $obj = new HistoriaModel();
            
            $id=$_GET['pac_id'];

            $sql="SELECT * FROM historias WHERE pac_id=$id";
            $prueba=$obj->consult($sql);
                
            $sql = "SELECT * FROM historias";
            $historias = $obj-> consult($sql);

            $sql = "SELECT * FROM paciente WHERE pac_id='$id'";
            $pacientes = $obj-> consult($sql);
    
            include_once '../view/Historia/insert.php';

        }

        public function postInsert(){
            $obj = new HistoriaModel();

            $hist_motv=$_POST['hist_motv'];
            $hist_esfod=$_POST['hist_esfod'];
            $hist_cilod=$_POST['hist_cilod'];
            $hist_ejeod=$_POST['hist_ejeod'];
            $hist_esfoi=$_POST['hist_esfoi'];
            $hist_ciloi=$_POST['hist_ciloi'];
            $hist_ejeoi=$_POST['hist_ejeoi'];
            $hist_diaod=$_POST['hist_diaod'];
            $hist_diaoi=$_POST['hist_diaoi'];
            $hist_recom=$_POST['hist_recom'];
            $pac_id=$_GET['pac_id'];

            $hist_id=$obj->autoincrement("hist_id","historias");

            $sql = "INSERT INTO historias VALUES ($hist_id,'$hist_motv','$hist_esfod','$hist_cilod','$hist_ejeod','$hist_esfoi','$hist_ciloi','$hist_ejeoi','$hist_diaod','$hist_diaoi','$hist_recom',$pac_id)";
            $ejecutar=$obj->insert($sql);

            if($ejecutar){
                ?>
                     <script>
                        alert("Se registro correctamente");
                     </script> 
                    
                    <?php

                redirect(getUrl2("Paciente","Paciente","consult"));
            }
            else {
                echo "Hubo un error";
            }
        }

        public function consult(){
            $obj = new HistoriaModel();

            $id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT * FROM historias WHERE $id=pac_id";
            $historias=$obj->consult($sql);

            /* $sql="SELECT p.pac_nombre, p.pac_apellido, p.pac_direccion, p.pac_telefono, h.hist_id, h.hist_motv, h.hist_esfod, h.hist_cilod, h.hist_ejeod, h.hist_esfoi, h.hist_ciloi, h.hist_ejeoi, h.hist_diaod, h.hist_diaoi, h.hist_recom FROM paciente p, historias h WHERE p.pac_id=h.pac_id AND $id=p.pac_id";
            $historias=$obj->consult($sql); */

            include_once '../view/Historia/consult.php';

        }

        public function consulta(){
            $obj = new HistoriaModel();

            $id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT * FROM historias WHERE $id=pac_id";
            $historias=$obj->consult($sql);

            /* $sql="SELECT p.pac_nombre, p.pac_apellido, p.pac_direccion, p.pac_telefono, h.hist_id, h.hist_motv, h.hist_esfod, h.hist_cilod, h.hist_ejeod, h.hist_esfoi, h.hist_ciloi, h.hist_ejeoi, h.hist_diaod, h.hist_diaoi, h.hist_recom FROM paciente p, historias h WHERE p.pac_id=h.pac_id AND $id=p.pac_id";
            $historias=$obj->consult($sql); */

            include_once '../view/Historia/consulta.php';

        }

        public function getUpdate(){
            $obj=new HistoriaModel();
            
            $hist_id=$_GET['hist_id'];

            $sql="SELECT * FROM historias WHERE hist_id=$hist_id";
            $historias=$obj->consult($sql);

            $sql="SELECT * FROM paciente";
            $pacientes=$obj->consult($sql);

            include_once "../view/Historia/update.php";
        }
    
        public function postUpdate(){
            $obj=new HistoriaModel();

            $pac_id=$_POST['pac_id'];
            $hist_id=$_POST['hist_id'];
            $hist_motv=$_POST['hist_motv'];
            $hist_esfod=$_POST['hist_esfod'];
            $hist_cilod=$_POST['hist_cilod'];
            $hist_ejeod=$_POST['hist_ejeod'];
            $hist_esfoi=$_POST['hist_esfoi'];
            $hist_ciloi=$_POST['hist_ciloi'];
            $hist_ejeoi=$_POST['hist_ejeoi'];
            $hist_diaod=$_POST['hist_diaod'];
            $hist_diaoi=$_POST['hist_diaoi'];
            $hist_recom=$_POST['hist_recom'];

            $sql="UPDATE historias SET hist_motv='$hist_motv', hist_esfod='$hist_esfod', hist_cilod='$hist_cilod', hist_ejeod='$hist_ejeod', hist_esfoi='$hist_esfoi', hist_ciloi='$hist_ciloi', hist_ejeoi='$hist_ejeoi', hist_diaod='$hist_diaod', hist_diaoi='$hist_diaoi', hist_recom='$hist_recom' WHERE hist_id=$hist_id";
            $ejecutar=$obj->update($sql);

            if($ejecutar){

                ?>
                     <script>
                        alert("Se edito correctamente");
                     </script> 
                    
                    <?php
                redirect(getUrl2("Historia","Historia","consult",array("pac_id"=>"$pac_id")));
            } else {
                echo "Hubo un error";
            }
        }
    
    }

?>
    