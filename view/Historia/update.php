<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-success" style="color: white;">
    <h3 class="display-4">Editar Historia de Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach ($historias as $his) {
    ?>
    <div class="mt-5 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark formulario">
        <div class="w3-container">
        <form action="<?php echo getUrl2("Historia","Historia","postUpdate");?>" method="post">


            <div class="w3-third">
                <input type="hidden" name="pac_id" value="<?php echo $his['pac_id'];?>">
                <input type="hidden" name="hist_id" value="<?php echo $his['hist_id'];?>">

                <label class="form-label">Motivo</label>
                <textarea rows="13.5" cols="50" name="hist_motv" class="w3-input w3-border w3-round-large"  require="required" ><?php echo $his['hist_motv']?></textarea>
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Esfera Ojo Derecho</label>
                <input type="text" name="hist_esfod" value="<?php echo $his['hist_esfod'];?>" class="form-control" required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Circunferencia Ojo Derecho</label>
                <input type="text" name="hist_cilod" value="<?php echo $his['hist_cilod'];?>" class="form-control" required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Eje Ojo Derecho</label>
                <input type="number" name="hist_ejeod" value="<?php echo $his['hist_ejeod'];?>" class="form-control required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Esfera Ojo Izquierdo</label>
                <input type="number" name="hist_esfoi" value="<?php echo $his['hist_esfoi'];?>" class="form-control required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Circunferencia Ojo Izquierdo</label>
                <input type="number" name="hist_ciloi" value="<?php echo $his['hist_ciloi'];?>" class="form-control required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Eje Ojo Izquierdo</label>
                <input type="number" name="hist_ejeoi" value="<?php echo $his['hist_ejeoi'];?>" class="form-control required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Diametro Ojo Derecho</label>
                <input type="text" name="hist_diaod" value="<?php echo $his['hist_diaod'];?>" class="form-control required="required">
            </div>

            <div class="w3-third" style="padding-left: 1%;">
                <label class="form-label">Diametro Ojo Izquierdo</label>
                <input type="text" name="hist_diaoi" value="<?php echo $his['hist_diaoi'];?>" class="form-control required="required">
            </div>

            <div class="w3-rest mt-2" style="padding-left: 1%;">
                <label class="form-label">Recomendaciones</label>
                <textarea rows="5" cols="130" name="hist_recom" class="w3-input w3-border w3-round-large" step="any" required><?php echo $his['hist_recom'];?></textarea>
            </div>

            <div class="w3-margin-top" style="float: right;">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-green w3-medium w3-block">
            </div>
        </form>

        <!-- Boton atras -->
        <div  class="w3-margin-top" style="float: left;">
            <a href='<?php echo getUrl2("Paciente", "Paciente", "consult") ?>'>
            <button class='btn_search w3-button w3-green w3-round-xlarge w3-medium'>Atrás</button></a>
        </div>

        </div>
    </div>
    <?php }?>
</div>

<br><br><br><br><br><br><br><br>