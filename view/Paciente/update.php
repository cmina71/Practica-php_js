<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Editar Paciente</b></h3>
</div>

<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">
    <?php
        foreach ($pacientes as $pac) {
    ?>

    <form action="<?php echo getUrl2("Paciente","Paciente","postUpdate");?>" method="post">

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
                    foreach ($estratos as $estr) {
                        if ($estr['estr_id']==$pac['estr_id']){
                            $checked="checked";
                        }
                        else{
                            $checked="";
                            
                        }
                        echo "<br>";
                        echo "<input type='radio' name='estr_id' value='".$estr['estr_id']."'$checked>".$estr['estr_nombre'];
                    }
                ?>
            </div>

            <div class="w3-third w3-margin-left mt-3">
                <label class="form-label"><b>Género</b></label>
                <select name="gen_id" class="w3-input w3-border w3-round-large">
                    <?php 
                        foreach ($generos as $gen) {
                            if ($gen['gen_id']==$pac['gen_id']){
                                $selected="selected";
                            }
                            else{
                                $selected="";
                            }
                            echo "<option value='".$gen['gen_id']."'$selected>".$gen['gen_nombre']."</option>";
                        }
                    ?>
                </select>
            </div>

           
            <div class="w3-third w3-margin-left ms-5 mt-3">
                <label class="form-label"><b>Hobbies</b></label>
                <br>
               
                    <label>
                        <?php
                        foreach($hobbies as $hob) {


                            $hob_id= $hob['hob_id'];
                           $sql = "SELECT * FROM paciente_hobbies WHERE pac_id=$pac_id AND hob_id=$hob_id";
                           
                           $paciente_hobbies = $obj -> consult($sql);

                           $contador = mysqli_num_rows($paciente_hobbies);
               
                           if ($contador == 0){
                               ?>
                                   <input type="checkbox" name="<?=$hob['hob_id']?>" value="<?= $hob['hob_id']?>">
                                   <label><?= $hob['hob_nombre']?></label><br>
                               <?php
                           }
                           foreach ($paciente_hobbies as $pac_hob) {
                            $checked = "";
                           
                           if ($pac_hob['hob_id'] == $hob['hob_id']) {
                             $checked = "checked";
                            ?>
                           <input type="checkbox" name="<?=$hob['hob_id']?>" value="<?= $hob['hob_id']?>" <?=$checked ?>>
                           
                             <label><?= $hob['hob_nombre']?></label><br>
                       <?php
                       
                         }
                     }
                    }
                       
                       ?>    
                        
                        
                    </label><br>                  
                    
                </label><br>
            </div>

            <div class="w3-margin-top col-4" style="float: right;">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-blue w3-medium w3-block col-4" style="float: right;">
            </div>
        

            <div  class="w3-margin-top" style="float: left;">
                <a href='<?php echo getUrl2("Paciente", "Paciente", "consult") ?>'>
                <button class='btn_search w3-button w3-blue w3-round-xlarge w3-medium'>Atrás</button></a>
            </div>

        </div>

    </form>
    <?php }?>
</div>
<br><br><br><br><br>