<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Eliminar Usuario</b></h3>
</div>

<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">
    <?php
        foreach ($usuarios as $usu) {
        
    ?>
    <div class="w3-container">
        <form action="<?php echo getUrl("Usuario","Usuario","postDelete");?>" method="post">

       
            <div class="w3-third">
                <label class="form-label"><b>Número de documento</b></label>
                <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'];?>">
                <input type="text" name="usu_docum" class="w3-input w3-border w3-round-large" value="<?php echo $usu['usu_docum'];?>" readonly>
            </div>

            <div class="w3-half w3-margin-left">
                <label class="form-label"><b>Nombres</b></label>
                <input type="text" name="usu_nombre" class="w3-input w3-border w3-round-large" value="<?php echo $usu['usu_nombre'];?>" readonly>
            </div>

            <div class="w3-third w3-margin-top">
                <label class="form-label"><b>Contraseña</b></label>
                <input type="text" name="usu_clave" class="w3-input w3-border w3-round-large" value="<?php echo $usu['usu_clave'];?>" readonly>
            </div>

            <div class="w3-half w3-margin-left w3-margin-top">
                <label name="rol_id" class="form-label"><b>Rol a acupar</b></label>
                    <?php 
                        foreach ($roles as $rol) {
                            if ($usu['rol_id'] == $rol['rol_id']) {
                                echo '<input type="text" name="rol_id" class="w3-input w3-border w3-round-large" value="', $rol['rol_nombre'],'" readonly>'; 
                            }
                        }
                    ?>
            </div>

            <div class="w3-margin-top col-4 col-4" style="float: right;">
                <input type="submit" value="Eliminar" class="w3-btn w3-round-xlarge w3-blue w3-medium w3-block col-4" onclick='return edito()'>
            </div>
        
        </form>

        <div  class="w3-margin-top w3-margin-right" style="float: right;">
            <a href='<?php echo getUrl("Usuario", "Usuario", "consult") ?>' style="color: #FF0000; text-decoration: none;">
            <button class='w3-btn w3-round-xlarge w3-blue w3-medium w3-block' >Atrás</button></a>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function edito(){
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Se Eliminó correctamente',
                showConfirmButton: false,
                timer: 2500
            })}
                </script>
            

    <?php }?>


