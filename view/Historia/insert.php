<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-success" style="color: white;">
    <h4 class="display-4"><b>Información Básica del Paciente</b></h4>
</div>

<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">
    <?php
        foreach ($pacientes as $pac) {
    ?>
        <div class="w3-container">
            
            <div class="w3-quarter"> 
                <label class="form-label"><b>ID</b></label>
                <input type="number" name="pac_id" value="<?php echo $pac['pac_id'];?>" class="w3-input w3-border w3-round-large" readonly>
            </div>
                    
            <div class="w3-third w3-margin-left">
                <label class="form-label"><b>Nombre(s)</b></label>
                <input type="text" name="pac_nombre" value="<?php echo $pac['pac_nombre'];?>" class="w3-input w3-border w3-round-large" readonly>
            </div>

            <div class="w3-third w3-margin-left">
                <label class="form-label"><b>Apellidos</b></label>
                <input type="text" name="pac_apellido" class="w3-input w3-border w3-round-large" value="<?php echo $pac['pac_apellido'];?>" readonly>
            </div>

            <div class="w3-twothird">
                <label class="form-label"><b>Direccion</b></label>
                <input type="text" name="pac_direccion" class="w3-input w3-border w3-round-large" value="<?php echo $pac['pac_direccion'];?>" readonly>
            </div>
                
            <div class="w3-quarter w3-margin-left">
                <label class="form-label"><b>Telefono</b></label>
                <input type="number" name="pac_telefono" class="w3-input w3-border w3-round-large" value="<?php echo $pac['pac_telefono'];?>" readonly>
            </div>
    </div>
</div>

<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow bg-success" style="color: white;">
    <h3 class="display-4"><b>Registrar Historia Medica</b></h3>
</div>

<div class="table table-hover table-striped mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">
    <div class="w3-container">

        <form action="<?php echo getUrl2("Historia","Historia","postInsert",array("pac_id"=>$pac['pac_id']));?>" method="post">

        
            <div class="w3-third">
                <label class="form-label"><b>Motivo</b></label>
                <textarea rows="12" cols="50" name="hist_motv" class="form-control" placeholder="Escribir Aquí..." required="required"></textarea>
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Esfera Ojo Derecho</b></label>
                <input type="number" name="hist_esfod" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Circunferencia Ojo Derecho</b></label>
                <input type="number" name="hist_cilod" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Eje Ojo Derecho</b></label>
                <input type="number" name="hist_ejeod" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Esfera Ojo Izquierdo</b></label>
                <input type="number" name="hist_esfoi" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Circunferencia Ojo Izquierdo</b></label>
                <input type="number" name="hist_ciloi" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Eje Ojo Izquierdo</b></label>
                <input type="number" name="hist_ejeoi" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Diametro Ojo Derecho</b></label>
                <input type="text" name="hist_diaod" class="form-control" step="any" required="required">
            </div>

            <div class="w3-third">
                <label class="form-label"><b>Diametro Ojo Izquierdo</b></label>
                <input type="text" name="hist_diaoi" class="form-control" step="any" required="required">
            </div>

            <div class="w3-rest" style="float: left;"><br>
                <label class="form-label" style="float: left;"><b>Recomendaciones</b></label>
                <textarea rows="5" cols="130" name="hist_recom" class="form-control" placeholder="Escribir..." required="required"></textarea>
            </div>

            <div class="w3-margin-top col-4" style="float: right;">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-green w3-medium w3-block col-4" style="float: right;">
            </div>
        

        </form>
<?php }?>
            <!-- Boton atras -->
        <div  class="w3-margin-top" style="float: left;">
            <a href='<?php echo getUrl2("Paciente", "Paciente", "consult") ?>'>
            <button class='btn_search w3-button w3-green w3-round-xlarge w3-medium'>Atrás</button></a>
        </div>
    </div>
</div>


<br><br><br><br><br>
