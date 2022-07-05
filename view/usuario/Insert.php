<div>
<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Registrar Usuario</b></h3>
</div>

<div class="mt-5 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded">

    <div class="w3-container">
        <form action="<?php echo getUrl("Usuario","Usuario","postInsert");?>" method="post">

       
            <div class="w3-third">
                <label class="form-label"><b>Número de documento</b></label>
                <input type="number" name="usu_docum" class="w3-input w3-border w3-round-large" placeholder="N° Documento" required="required">
            </div>

            <div class="w3-half w3-margin-left">
                <label class="form-label"><b>Nombres</b></label>
                <input type="text" name="usu_nombre" class="w3-input w3-border w3-round-large" placeholder="Nombres" required="required">
            </div>

            <div class="w3-third w3-margin-top">
                <label class="form-label"><b>Contraseña</b></label>
                <input type="password" name="usu_clave" class="w3-input w3-border w3-round-large" placeholder="contraseña" required="required">
            </div>

            <div class="w3-half w3-margin-left w3-margin-top">
                <label class="form-label"><b>Rol a ocupar</b></label>
                <select name="rol_id"  class="w3-input w3-border w3-round-large" required="required">
                    <option disabled selected>Selecciona Rol de menú</option>
                    <?php 
                        foreach ($roles as $rol) {
                            echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
                        }
                    ?>
                </select>

            </div>

            <div class="w3-margin-top col-4" style="float: right;">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-blue w3-medium w3-block col-4" onclick='return edito()' >
            </div>
             
        </form>

        <div  class="w3-margin-top w3-margin-right" style="float: right;">
            <a href='<?php echo getUrl("Usuario", "Usuario", "consult") ?>' style="color: #FF0000; text-decoration: none;">
            <button class='w3-btn w3-round-xlarge w3-blue w3-medium w3-block' >Atrás</button></a>
        </div>

    </div>
</div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function edito(){
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Se registró correctamente',
                showConfirmButton: false,
                timer: 2500
            })}
                </script>

<br><br><br><br><br><br>
