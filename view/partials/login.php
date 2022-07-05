<form action="<?php echo getUrl1("Login","Login","postLogin");?>" method="post">
    <div class="img">
        <img src="Opto.png" alt="" srcset="">
    </div>

    <div class="form-group">
        <h2>Inicio de Sesión</h2>
    </div>

    <div class="form-group">
        <label>N° de Documento</label>
        <input type="number" name="usu_docum" placeholder="Documento" required="required" value="usu_id">
    </div>

    <div class="form-group">
        <label>Contrase&ntilde;a</label>
        <input type="password" name="usu_clave" placeholder="Password" required="required">
    </div>

    <div class="form-group" >
        <label>Rol de Trabajo</label>
        <select name="rol_id" class="seleccion">

            <?php 
                foreach ($roles as $rol) {
                    echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
                }
            ?>

        </select>
    </div>

    <input type="submit" value="Enviar" name="btn-enviar" id="btn-enviar">
</form>

<br><br><br><br><br>

<label for="">...</label>