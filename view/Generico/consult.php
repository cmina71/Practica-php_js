<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-success" style="color: white;">
    <h3 class="display-4"><b>Consultar <?php echo ucfirst($tabla); ?></b></h3>
</div>
<br> <br>

<!-- Boton de registrar -->
<div style="float:end; margin-bottom: 25px;">
    <a class="" href="<?php echo getUrl("Generico","Generico","getInsert",array("tabla"=>$tabla, "campo"=>$campo)); ?>"><button class='btn_search w3-button w3-green w3-round-large'> Registrar <?php echo ucfirst($tabla); ?></button></a>
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

<div  class=" mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded">
    
    
    <!-- Funcion de buscar 
    <div class="mt-5">
        <div class="col-md-3 mb-4">
            <input type="text" name="buscar" id="buscar" class="form-control" placeholder="<?php echo ucfirst($tabla)." a buscar..."; ?>" data-url="<?php echo getUrl("Generico","Generico","filtro",array("tabla"=>$tabla, "campo"=>$campo),"ajax");?>">
        </div> -->

    <!-- Tabla de consulta -->
        <table class=" p-auto table w3-bottombar w3-leftbar w3-rightbar w3-topbar w3-border-green" id="tabla">
            <thead>
                <tr class="w3-bottombar w3-border-green w3-green">
                    <th>Id</th>
                    <th>Nombres</th>
                    <th colspan="2">Acciones</th>
                </tr> 
            </thead>
            <tbody>
                <?php 

                    foreach ($generico as $gen){
                        echo "<tr class='w3-hover-gray'>";
                            echo "<td>".$gen[$campoId]."</td>";
                            echo "<td>".$gen[$campoNombre]."</td>";
                            //Boton de editar
                            
                            echo "<td> <a href='".getUrl("Generico", "Generico", "getUpdate",array("tabla"=>$tabla, "campo"=>$campo, "id"=>$gen[$campoId]))."'> <button class='btn_search w3-button w3-blue w3-round-large' onclick='return ConfirmEdit()'>Editar</button></a></td>";
                            ?>
                            <!-- Boton de Eliminar -->
                            <td> <a href='<?php echo getUrl("Generico","Generico","getDelete", array("tabla"=>$tabla, "campo"=>$campo, "id"=>$gen[$campoId]))?>'>
                                    <button class='btn_search w3-button w3-red w3-round-large' onclick="return ConfirmDelete()">Eliminar</button></a></td>
                        </tr>
        <?php     }
                ?>
            </tbody>
        </table>
    </div>
</div>


<br><br><br><br><br><br>