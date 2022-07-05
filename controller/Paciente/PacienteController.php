<?php 

    include_once '../model/Paciente/PacienteModel.php';

    class PacienteController {
        public function getInsert(){
            $obj = new PacienteModel();

            $sql = "SELECT * FROM paciente";
            $pacientes = $obj-> consult($sql);

            $sql = "SELECT * FROM generos";
            $generos = $obj-> consult($sql);

            $sql = "SELECT * FROM estratos";
            $estratos = $obj-> consult($sql);

            $sql="SELECT * FROM hobbies";
            $hobbies=$obj-> consult($sql);

            $sql="SELECT * FROM paciente_hobbies";
            $pac_hob=$obj-> consult($sql);

            include_once '../view/Paciente/insert.php';
        }
    
        public function postInsert(){
            $obj = new PacienteModel();

            $pac_nombre=$_POST['pac_nombre'];
            $pac_apellido=$_POST['pac_apellido'];
            $pac_direccion=$_POST['pac_direccion'];
            $pac_telefono=$_POST['pac_telefono'];
            $gen_id=$_POST['gen_id'];
            $estr_id=$_POST['estr_id'];
            $hobb_id=$_POST['hob_id'];

            $pac_id=$obj->autoincrement("pac_id","paciente");

            $sql = "INSERT INTO paciente VALUES ($pac_id,'$pac_nombre','$pac_apellido','$pac_direccion',$pac_telefono,$gen_id,$estr_id)";
            $ejecutar=$obj->insert($sql);

            //dd($hobb_id);

            $checked_contador = count($hobb_id);
            for ($i=0; $i <  $checked_contador; $i++) { 
                $pac_hob_id=$obj->autoincrement("pac_hob_id","paciente_hobbies");

                $sql = "INSERT INTO paciente_hobbies VALUES ($pac_hob_id, $pac_id, $hobb_id[$i])";
                
                $ejecutar = $obj->insert($sql);
            }        
        
            if($ejecutar){

                ?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                     <script>
                        Swal.fire("Se registro correctamente"); 
                     </script> 
                    
                    <?php
                redirect(getUrl2("Paciente","Paciente","Consult"));
            }
            else {
                echo "Hubo un error";
            }
        }

        public function consult(){
            $obj = new PacienteModel();

            $sql="SELECT p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_direccion, pac_telefono, g.gen_nombre, e.estr_nombre FROM paciente p, generos g, estratos e WHERE p.gen_id=g.gen_id AND p.estr_id=e.estr_id ORDER BY p.pac_id";
            $pacientes=$obj->consult($sql);

            include_once '../view/Paciente/consult.php';

        }

        public function consulta(){
            $obj = new PacienteModel();

            $sql="SELECT p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_direccion, pac_telefono, g.gen_nombre, e.estr_nombre FROM paciente p, generos g, estratos e WHERE p.gen_id=g.gen_id AND p.estr_id=e.estr_id ORDER BY p.pac_id";
            $pacientes=$obj->consult($sql);

            include_once '../view/Paciente/consulta.php';

        }

        public function verDetalle(){
            $obj = new PacienteModel();

            $pac_id = $_GET['pac_id'];

            $sql="SELECT p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_direccion, p.pac_telefono, g.gen_nombre, e.estr_nombre FROM paciente p, generos g, estratos e WHERE p.gen_id=g.gen_id AND p.estr_id=e.estr_id AND p.pac_id=$pac_id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT p.pac_id, ph.pac_hob_id, ph.pac_id, ph.hob_id, h.hob_id, h.hob_nombre FROM paciente p, hobbies h, paciente_hobbies ph WHERE p.pac_id=$pac_id AND ph.pac_id=$pac_id AND ph.hob_id=h.hob_id";
            $paciente=$obj->consult($sql);

            $sql="SELECT pac_hob_id FROM paciente_hobbies WHERE pac_id=$pac_id";
            $detalle_hob=$obj->consult($sql);

            include_once '../view/Paciente/detalle.php';

        }

        public function verDetallee(){
            $obj = new PacienteModel();

            $pac_id = $_GET['pac_id'];

            $sql="SELECT p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_direccion, p.pac_telefono, g.gen_nombre, e.estr_nombre FROM paciente p, generos g, estratos e WHERE p.gen_id=g.gen_id AND p.estr_id=e.estr_id AND p.pac_id=$pac_id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT p.pac_id, ph.pac_hob_id, ph.pac_id, ph.hob_id, h.hob_id, h.hob_nombre FROM paciente p, hobbies h, paciente_hobbies ph WHERE p.pac_id=$pac_id AND ph.pac_id=$pac_id AND ph.hob_id=h.hob_id";
            $paciente=$obj->consult($sql);

            $sql="SELECT pac_hob_id FROM paciente_hobbies WHERE pac_id=$pac_id";
            $detalle_hob=$obj->consult($sql);

            include_once '../view/Paciente/detallee.php';

        }

        public function getUpdate(){
            $obj=new PacienteModel();
            
            $pac_id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT * FROM generos";
            $generos=$obj->consult($sql);

            $sql="SELECT * FROM hobbies ";
            $hobbies=$obj-> consult($sql);

            $sql="SELECT * FROM estratos";
            $estratos=$obj->consult($sql);
            
           /*  $sql="SELECT * FROM paciente_hobbies";

            $paciente_hob = $obj -> consult($sql); */

           /*  $sql="SELECT p.pac_nombre, h.hob_nombre, h.hob_id, p.pac_id, ph.pac_hob_id FROM paciente p, hobbies h, paciente_hobbies ph WHERE p.pac_id=ph.pac_id AND h.hob_id = ph.hob_id AND ph.pac_hob_id=ph.pac_hob_id ";
            $paciente_hob=$obj->consult($sql);    */

            $sql="SELECT * FROM paciente_hobbies WHERE pac_pacid=$pac_id";
            $paciente_hobbies=$obj -> consult($sql);

            

            include_once "../view/Paciente/update.php";
        }
    
        public function postUpdate(){
            $obj=new PacienteModel();

            $pac_id=$_POST['pac_id'];
            $pac_nombre=$_POST['pac_nombre'];
            $pac_apellido=$_POST['pac_apellido'];
            $pac_direccion=$_POST['pac_direccion'];
            $pac_telefono=$_POST['pac_telefono'];
            $gen_id=$_POST['gen_id'];
            $estr_id=$_POST['estr_id'];
            /* $hob_id=$_POST['hob_id']; */

            $sql="UPDATE paciente SET pac_nombre='$pac_nombre', pac_apellido='$pac_apellido', pac_direccion='$pac_direccion', pac_telefono=$pac_telefono, gen_id=$gen_id, estr_id=$estr_id 
            WHERE pac_id=$pac_id";
            $ejecutar=$obj->update($sql);
            
            $sql= "SELECT hob_id FROM hobbies";
            $hobbies= $obj->consult($sql);
            $delete = "DELETE FROM paciente_hobbies WHERE pac_id = $pac_id";
            $sql = $obj->Delete($delete);
            foreach ($hobbies as $key) {
                
                if (isset($_POST[$key['hob_id']])){
                    $id= $obj->autoincrement("pac_hob_id", "paciente_hobbies");
                    $hob_id = $key['hob_id'];
                    $sql = "INSERT INTO paciente_hobbies VALUES('$id', '$pac_id', '$hob_id')";
                    $obj->Insert($sql);
                }
            }


                
            if ($ejecutar) {
                redirect(getUrl("Paciente","Paciente","consult"));
            } else {
                echo "Recorcholis, hubo un error";
            }
        }

        public function getDelete(){
            $obj=new PacienteModel();
            
            $pac_id=$_GET['pac_id'];

            $sql="SELECT p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_direccion, pac_telefono, g.gen_nombre, e.estr_nombre FROM paciente p, generos g, estratos e WHERE p.pac_id=$pac_id AND p.gen_id=g.gen_id AND p.estr_id = e.estr_id";
            $pacientes=$obj->consult($sql);

            $sql="SELECT p.pac_id, ph.pac_hob_id, ph.pac_id, ph.hob_id, h.hob_id, h.hob_nombre FROM paciente p, hobbies h, paciente_hobbies ph WHERE p.pac_id=$pac_id AND ph.pac_id=$pac_id AND ph.hob_id=h.hob_id";
            $paciente=$obj->consult($sql);

            $sql="SELECT pac_hob_id FROM paciente_hobbies WHERE pac_id=$pac_id";
            $detalle_hob=$obj->consult($sql);

            include_once "../view/Paciente/delete.php";
        }

        public function postDelete(){
            $obj=new PacienteModel();

            $pac_id=$_POST['pac_id'];
            $pac_hob_id=$_POST['pac_hob_id'];

            $checked_contador=count($pac_hob_id);

            for ($i=0; $i <$checked_contador ; $i++) { 
                $sql="DELETE FROM paciente_hobbies Where pac_hob_id=$pac_hob_id[$i]";
                $ejecut=$obj->delete($sql);
            }

            if ($ejecut) {
                $sql="DELETE FROM paciente Where pac_id=$pac_id";
                $ejecutar=$obj->delete($sql);

            }else {
                echo "A ocurrido un Error";
            }

            if($ejecutar){
                ?>
                     <script>
                        alert("Se elimino correctamente");
                     </script> 
                    
                    <?php
                redirect(getUrl2("Paciente","Paciente","consult"));
            } else {
                echo "Hubo un error";
            }
        }
    
    }

?>