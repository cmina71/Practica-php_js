<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Consultar Pacientes</b></h3>
</div>
<script type="text/javascript">
    function ConfirmEdit() {
        var respuesta= confirm("Estas seguro de que quieres editar?");
        if (respuesta==true) {
            return true;
        }else{
            return false;
        }
    }

    function ConfirmDelete()
    {
        var respuesta = confirm("¿Estas seguro que deseas eliminar?");
        if (respuesta == true) {
            return true;
        }else{
            return false;
        }
    }
</script>
<div class=" mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded">

<div class=" ms-4 mt-5 fs-5">
    <table class="table table-hover p-auto" id="tabla">
        <thead class="w3-bottombar w3-leftbar w3-rightbar w3-border-blue">
            <tr class="w3-bottombar w3-border-blue w3-blue">
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <!-- <th>Direccion</th>
                <th>Telefono</th>
                <th>Género</th> -->
                <th>Estrato</th>
                <th colspan="5">Acciones</th>
            </tr>
        </thead>
        <tbody class="w3-bottombar w3-leftbar w3-rightbar w3-border-blue">
            <?php 

                foreach ($pacientes as $pac){
                    echo "<tr>";
                        echo "<td>".$pac['pac_id']."</td>";
                        echo "<td>".$pac['pac_nombre']."</td>";
                        echo "<td>".$pac['pac_apellido']."</td>";
                       /*  echo "<td>".$pac['pac_direccion']."</td>";
                        echo "<td>".$pac['pac_telefono']."</td>";
                        echo "<td>".$pac['gen_nombre']."</td>";  */
                        echo "<td>".$pac['estr_nombre']."</td>";

                        //Ver Detalle
                        ?><td><div class='page'><a href='<?php echo getUrl2("Paciente", "Paciente", "verDetalle", 
                        array("pac_id"=>$pac['pac_id']),"ajax"); ?>' id='<?php echo $id = $pac['pac_id'];?>'><button class='btn_search w3-button w3-blue w3-round-large w3-medium' id="<?php $btn++; ?>">Ver más...</button></a></div></td><?php

                        //Boton crear historia
                        echo "<td> <a href='".getUrl2("Historia", "Historia", "getInsert", 
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn_search w3-button w3-green w3-round-large w3-medium'>Crear Historia</button></a></td>";

                        //Boton consultar historia
                        echo "<td> <a href='".getUrl2("Historia", "Historia", "consult", 
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn_search w3-button w3-green w3-round-large w3-medium'>Consultar Historia</button></a></td>";

                        //Boton de editar
                        echo "<td> <a href='".getUrl2("Paciente", "Paciente", "getUpdate", 
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn_search w3-button w3-blue w3-round-large w3-medium' onclick='return ConfirmEdit()'>Editar</button></a></td>";
                        
                        //Boton de Eliminar
                        echo "<td> <a href='".getUrl2("Paciente","Paciente","getDelete",
                                array("pac_id"=>$pac['pac_id']))."'>
                                <button class='btn_search w3-button w3-red w3-round-large w3-medium' onclick='return ConfirmDelete()'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</div>

<div class="fondo_transparente" id="modales">
        <div class="modal">
            <div class="modal_cerrar">
                <span>x</span>
            </div>
            <div class="modal_titulo" id="modales">PACIENTE</div>
            <div class="modal_mensaje">
            <?php 

    foreach ($pacientess as $pec){
        if ($pac['pac_id'] == $id) {
            echo "<tr>";
            echo "<td>".$pac['pac_id']."</td>";
            echo "<td>".$pac['pac_nombre']."</td>";
            echo "<td>".$pac['pac_apellido']."</td>";
        /*  echo "<td>".$pac['pac_direccion']."</td>";
            echo "<td>".$pac['pac_telefono']."</td>";
            echo "<td>".$pac['gen_nombre']."</td>";  */
            echo "<td>".$pac['estr_nombre']."</td>";
        }
    }
        ?>
            </div>
            <div class="modal_botones">
                <a href="" class="boton">COMPARTIR</a>
                <a href="" class="boton">ACEPTAR</a>
            </div>
        </div>
    </div>

<script>

    document.getElementById("<?php echo $id;?>").addEventListener("click", function() {
        document.getElementsByClassName ("fondo_transparente") [0].style.display="block";
        return false;
    })

    document.getElementsByClassName("modal_cerrar") [0].addEventListener("click", function(){
        document.getElementsByClassName("fondo_transparente") [0].style.display="none";
    })

</script>
<br><br><br><br><br>


<style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

        body{
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
        .page{
        }
        .fondo_transparente{
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.226);
            position: absolute;
            height: 100vh;
            width: 100%;
            display: none;
        }
        .modal{
            background: linear-gradient(0deg,white 70%, crimson 30%);
            width: 600px;
            height: 300px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 30px;

        }
        .modal_cerrar{
            background: white;
            position: absolute;
            right: -20px;
            color: crimson;
            top: -20px;
            width: 40px;
            height: 40px;
            border-radius: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .modal_titulo{
            color: white;
            font-size: 40px;
        }
        .modal_mensaje{            
           padding: 10px 30px;
        }
        .modal_botones{      
            width: 100%;    
           background: whitesmoke;
           border-top:whitesmoke 1px;
           padding-top: 20px;
           display: flex;
           justify-content: space-evenly;
        }
        
        .boton{
            background: white;
            padding: 8px 30px;
            color: crimson;
            text-decoration: none;
            border-radius: 25px;
            border:1px solid crimson
        }
        .boton:hover{
            background: crimson;
            color: white;
        }
            
    </style>