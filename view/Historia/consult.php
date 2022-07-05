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
<?php } ?>

<script type="text/javascript">
    function ConfirmEdit() {
        var respuesta= confirm("Estas seguro de que quieres editar?");
        if (respuesta==true) {
            return true;
        }else{
            return false;
        }
    }
    </script>


<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-success" style="color: white;">
    <h3 class="display-4"><b>Consultar Historias Médicas</b></h3>
</div>


    <?php 
    $cont = 1;
        foreach ($historias as $his) {
    echo "<br>";
    echo "<b><h2>Historia #".$cont."</h2></b>";
    $cont++;
    ?>
    <div class="mt-5 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark formulario">
        
        <div class="w3-container">
            <div class="w3-third"> 
                <label class="form-label"><b>Motivo</b></label>
                <textarea rows="13.5" cols="50" name="hist_motv"  placeholder="<?php echo $his['hist_motv']?>" class="w3-input w3-border w3-round-large" readonly></textarea>
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label"><b>Esfera Ojo Derecho</b></label>
                <input type="number" name="hist_esfod" value="<?php echo $his['hist_esfod'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label"><b>Circunferencia Ojo Derecho</b></label>
                <input type="number" name="hist_cilod" value="<?php echo $his['hist_cilod'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Eje Ojo Derecho</b></label>
                <input type="number" name="hist_ejeod" value="<?php echo $his['hist_ejeod'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Esfera Ojo Izquierdo</b></label>
                <input type="number" name="hist_esfoi" value="<?php echo $his['hist_esfoi'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Circunferencia Ojo Izquierdo</b></label>
                <input type="number" name="hist_ciloi" value="<?php echo $his['hist_ciloi'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Eje Ojo Izquierdo</b></label>
                <input type="number" name="hist_ejeoi" value="<?php echo $his['hist_ejeoi'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Diametro Ojo Derecho</b></label>
                <input type="text" name="hist_diaod" value="<?php echo $his['hist_diaod'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-third mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Diametro Ojo Izquierdo</b></label>
                <input type="text" name="hist_diaoi" value="<?php echo $his['hist_diaoi'];?>" class="w3-input w3-border w3-round-large" step="any" readonly>
            </div>

            <div class="w3-rest mt-2" style="padding-left: 1%;">
                <label class="form-label"><b>Recomendaciones</b></label>
                <textarea rows="5" cols="130" name="hist_recom" placeholder="<?php echo $his['hist_recom'];?>" class="w3-input w3-border w3-round-large" step="any" readonly></textarea>
            </div>
    
            <div class="w3-margin-top" style="float: right;">
                <a href="<?php echo getUrl2("Historia", "Historia", "getUpdate", array("hist_id"=>$his['hist_id'])) ?>">
                <button class='btn_search w3-button w3-yellow w3-round-xlarge w3-medium' onclick='return ConfirmEdit()'>Editar</button></a>
            </div>

                <!-- Boton atras -->
            <div  class="w3-margin-top" style="float: left;">
                <a href='<?php echo getUrl2("Paciente", "Paciente", "consult") ?>'>
                <button class='btn_search w3-button w3-green w3-round-xlarge w3-medium'>Atrás</button></a>
            </div>
        </div>

    </div>
<?php  }?>


          

<br><br><br><br><br><br><br>