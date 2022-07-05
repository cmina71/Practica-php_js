<div class="mt-5">
    <h3 class="display-4 w3-bottombar w3-border-blue">Resultado de busqueda</h3>
</div>

<div class="mt-5 ">
    <table class="table table-hover">

    <thead>
        <tr>
            <th>Gen_id</th>
            <th>N° Documento</th>
            <th>Nombres</th>
            <th>Clave</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
    
     foreach ($usuarios as $usu) {
        ?> <tr class="w3-hover-blue"> <?php
            echo "<td>".$usu['usu_id']."</td>";
            echo "<td>".$usu['usu_docum']."</td>";
            echo "<td>".$usu['usu_nombre']."</td>";
            echo "<td>".$usu['usu_clave']."</td>";
            foreach ($roles as $rol) {
                if ($usu['rol_id']==$rol['rol_id']){
                    echo "<td>".$rol['rol_nombre']."</td>";
                }
            }
            //Boton de editar
            echo "<td> <a href='".getUrl("Usuario", "Usuario", "getUpdate", 
                    array("usu_id"=>$usu['usu_id']))."'>
                    <button class='btn btn-warning'>Editar</button></a></td>";
            
            //Boton de Eliminar
            echo "<td> <a href='".getUrl("Usuario", "Usuario", "getDelete",
                    array("usu_id"=>$usu['usu_id']))."'>
                    <button class='btn btn-danger'>Eliminar</button></a></td>";
            echo "</tr>";

    } 
    
    ?>
    </tbody>
    </table>
    <br><br><br><br>
</div>