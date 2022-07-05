<div class="mt-5">
    <h3 class="display-4">Eliminar Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach ($historias as $his) {
        
    ?>
    <form action="<?php echo getUrl2("Historia","Historia","postDelete");?>" method="post">

    <div class="row">
            <div class="col-md-4">
                <label class="form-label">Motivo</label>
                <input type="hidden" name="hist_id" value="<?php echo $his['hist_id'];?>">
                <input type="text" name="hist_motv" <?php echo $his['hist_id'];?> class="form-control" placeholder="Motivo" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Esfera Ojo Derecho</label>
                <input type="text" name="hist_esfod" <?php echo $his['hist_esfod'];?> class="form-control" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Circunferencia Ojo Derecho</label>
                <input type="text" name="hist_cilod" <?php echo $his['hist_cilod'];?> class="form-control" required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Eje Ojo Derecho</label>
                <input type="number" name="hist_ejeod" <?php echo $his['hist_ejeod'];?> class="form-control required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Esfera Ojo Izquierdo</label>
                <input type="number" name="hist_esfoi" <?php echo $his['hist_esfoi'];?> class="form-control required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Circunferencia Ojo Izquierdo</label>
                <input type="number" name="hist_ciloi" <?php echo $his['hist_ciloi'];?> class="form-control required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Eje Ojo Izquierdo</label>
                <input type="number" name="hist_ejeoi" <?php echo $his['hist_ejeoi'];?> class="form-control required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Diametro Ojo Derecho</label>
                <input type="number" name="hist_diaod" <?php echo $his['hist_diaod'];?> class="form-control required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Diametro Ojo Izquierdo</label>
                <input type="number" name="hist_diaoi" <?php echo $his['hist_diaoi'];?> class="form-control required="required">
            </div>

            <div class="col-md-4">
                <label class="form-label">Recomendaciones</label>
                <input type="number" name="hist_recom" <?php echo $his['hist_recom'];?> class="form-control" placeholder="Escribir..." required="required">
            </div>

            <div class="col md-4">
                <label class="form-label">Paciente</label>
                    <?php 
                    //Lo dejé por acá
                        foreach ($paciente as $pac) {
                            if ($pac['pac_id']==$his['pac_id']){
                                $selected="selected";
                            }
                            else{
                                $selected="";
                            }
                            echo "<input value='".$his['pac_id']."'>".$pac['pac_nombre']." type='text' readonly>";
                        }
                    ?>
            </div>

            <div class="col md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>

    </form>
    <?php }?>
</div>