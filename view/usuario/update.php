<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Editar Usuario</b></h3>
</div>
 
<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">
    <?php
        foreach ($usuarios as $usu) {
        
    ?>
    <div class="w3-container">
        <form action="<?php echo getUrl("Usuario","Usuario","postUpdate");?>" method="post">

        
            <div class="w3-third">
                <label class="form-label"><b>Número de documento</b></label>
                <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'];?>">
                <input type="text" name="usu_docum" class="w3-input w3-border w3-round-large" placeholder="N° Documento" value="<?php echo $usu['usu_docum'];?>">
            </div>

            <div class="w3-half w3-margin-left">
                <label class="form-label"><b>Nombres</b></label>
                <input type="text" name="usu_nombre" class="w3-input w3-border w3-round-large" placeholder="Nombres" value="<?php echo $usu['usu_nombre'];?>">
            </div>

            <div class="w3-third w3-margin-top">
                <label class="form-label"><b>Contraseña</b></label>
                <input type="text" name="usu_clave" class="w3-input w3-border w3-round-large" placeholder="contraseña"  value="<?php echo $usu['usu_clave'];?>">
            </div>

            <div class="w3-half w3-margin-left w3-margin-top">
                <label class="form-label"><b>Roles</b></label>
                <select name="rol_id" class="w3-input w3-border w3-round-large">
                    <?php 
                        foreach ($roles as $rol) {
                            if ($rol['rol_id']==$usu['rol_id']){
                                $selected="selected";
                                echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
                            }
                            else{
                                $selected="";
                                echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
                            }
                           
                        }
                    ?>
                </select>
            </div>

            <div class="w3-margin-top col-4" style="float: right;">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-blue w3-medium w3-block col-4" onclick='return edito()'>
            </div>
       

           
        </form>

            <div  class="w3-margin-top w3-margin-right" style="float: right;">
                <a href='<?php echo getUrl("Usuario", "Usuario", "consult") ?>' style="color: #FF0000; text-decoration: none;">
                <button class='w3-btn w3-round-xlarge w3-blue w3-medium w3-block' >Atrás</button></a>
            </div>
        <?php }?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    function edito(){
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Se editó correctamente',
                        showConfirmButton: false,
                        timer: 2500
                    })}
                </script>

    </div>
</div>

