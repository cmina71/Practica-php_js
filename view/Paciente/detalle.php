<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Consultar Paciente</b></h3>
</div>

<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">

<?php 
    $btn = 0;
    foreach ($pacientes as $pac){ 
    ?>
    <div class="w3-container">
    
        <div class="w3-quarter"> 
            <label class="form-label"><b>ID</b></label>
            <input type="number" name="pac_id" value="<?php echo $pac['pac_id'];?>" class="w3-input w3-border w3-round-large" readonly>
        </div>

        <div class="w3-third w3-margin-left">
            <label class="form-label"><b>Nombre(s)</b></label>
            <input type="text" name="pac_nombre" value="<?php echo $pac['pac_nombre'];?>" class="w3-input w3-border w3-round-large" required="required">
        </div>

        <div class="w3-third w3-margin-left">
            <label class="form-label"><b>Apellidos</b></label>
            <input type="text" name="pac_apellido" class="w3-input w3-border w3-round-large" value="<?php echo $pac['pac_apellido'];?>" required="required"> 
        </div>
                
        <div class="w3-twothird mt-3">
            <label class="form-label"><b>Direccion</b></label>
            <input type="text" name="pac_direccion" class="w3-input w3-border w3-round-large" value="<?php echo $pac['pac_direccion'];?>" required="required">
        </div>

        <div class="w3-quarter w3-margin-left mt-3">
            <label class="form-label"><b>Telefono</b></label>
            <input type="number" name="pac_telefono" class="w3-input w3-border w3-round-large" value="<?php echo $pac['pac_telefono'];?>" required="required">
        </div>
        
        <div class="w3-quarter mt-3">
            <label class="form-label"><b>Estrato</b></label>
            <?php
                foreach ($pacientes as $estr) {
                    echo '<input type="text" name="estr_id" class="form-control" value="', $estr['estr_nombre'],'" readonly>';   
                }
            ?>     
        </div>

        <div class="w3-third w3-margin-left mt-3">
            <label class="form-label"><b>Género</b></label>
            <?php
                foreach ($pacientes as $gen) {
                    echo '<input type="text" name="gen_id" class="form-control" value="', $gen['gen_nombre'],'" readonly>';   
                }
            ?>
        </div>
                
        <div class="w3-third w3-margin-left ms-5 mt-3">
            <label class="form-label"><b>Hobbies</b></label>
            <div>

            <?php
                foreach($detalle_hob as $det) {
                    echo ' <input type="hidden" name="pac_hob_id[]" value="'.$det['pac_hob_id'].'">';
                }
            ?>

            </div>

            <?php
                foreach ($paciente as $hob) {
                    echo '<input type="text" name="hob_id" class="form-control" value="', $hob['hob_nombre'],'" readonly>';   
                }
            ?>

        </div>
        
        <div  class="w3-margin-top" style="float: left;">
            <a href='<?php echo getUrl2("Paciente", "Paciente", "consult") ?>'>
            <button class='btn_search w3-button w3-blue w3-round-xlarge w3-medium'>Atrás</button></a>
        </div>
        
        <?php
    }
?>   
</div>
</div>
<br><br><br><br><br><br>