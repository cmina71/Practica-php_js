<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Consultar Usuarios</b></h3>
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

<div class=" mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded  ">

<div class=" ms-4 mt-5 fs-5">
    <table class="table table-hover p-auto" id="tabla">
        <thead class="w3-bottombar w3-leftbar w3-rightbar w3-border-blue">
            <tr class="w3-bottombar w3-border-blue w3-blue">
                <th>Id</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Clave</th>
                <th>Rol</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody class="w3-bottombar w3-leftbar w3-rightbar w3-border-blue">
            <?php 
                foreach ($usuarios as $usu){
                    ?>
                        <tr class="w3-hover-gray"> <?php
                        echo "<td>".$usu['usu_id']."</td>";
                        echo "<td>".$usu['usu_docum']."</td>";
                        echo "<td>".$usu['usu_nombre']."</td>";
                        echo "<td>".$usu['usu_clave']."</td>";
                        echo "<td>".$usu['rol_nombre']."</td>";
                         //Boton de editar
                         echo "<td> <a href='".getUrl("Usuario", "Usuario", "getUpdate", 
                         array("usu_id"=>$usu['usu_id']))."'>
                         <button class='btn_search w3-button w3-blue w3-round-large' onclick='return ConfirmEdit()'>Editar</button></a></td>";
                 
                        //Boton de Eliminar
                        echo "<td> <a href='".getUrl("Usuario", "Usuario", "getDelete",
                                array("usu_id"=>$usu['usu_id']))."'>
                                <button class='btn_search w3-button w3-red w3-round-large' onclick='return ConfirmDelete()'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
            ?>
            
        </tbody>
        
    </table>
</div>
</div>

<br><br><br><br>