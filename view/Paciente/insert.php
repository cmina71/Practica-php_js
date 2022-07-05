<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-primary" style="color: white;">
    <h3 class="display-4"><b>Registrar Paciente</b></h3>
</div>

<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded bg-light text-dark">

    <form class="formulario " id="formulario" action="<?php echo getUrl2("Paciente","Paciente","postInsert");?>" method="post">

        <div class="w3-container">

            <div class="w3-third">
                <label for="nombre" class="form-label"><b>Nombres</b></label> 
                <input type="text" name="pac_nombre" class="w3-input w3-border w3-round-large" id="nombre" placeholder="Nombres" required="required">
            </div>

            <div class="w3-third w3-margin-left">
                <label for="apellido" class="form-label"><b>Apellidos</b></label>
                <input type="text" name="pac_apellido" class="w3-input w3-border w3-round-large" id="apellido" placeholder="Apellidos" required="required">
            </div>

            <div class="w3-twothird mt-4" id="grupo__direccion">
                <label for="direccion" class="formulario__label"><b>Dirección</b></label>
                <input type="text" name="pac_direccion" class="w3-input w3-border w3-round-large" id="direccion" placeholder="Dirección" required="required">
            </div>

            <div class="w3-quarter w3-margin-left mt-4" id="grupo__telefono">
                <label for="telefono" class="formulario__label"><b>Teléfono</b></label>
                <input type="number" name="pac_telefono" class="w3-input w3-border w3-round-large" id="telefono" placeholder="Telefono" required="required">
            </div>
            
            <div class="w3-quarter mt-4">
                <label for="estratos" class="formulario__label"><b>Estrato</b></label>
                <br>
                    <?php        
                        foreach ($estratos as $estr) {
                            echo "<input type='radio' name='estr_id'required='required' value='".$estr['estr_id']."'>".$estr['estr_nombre'];
                            echo "<br>";
                        }                          
                    ?>
            </div>

            <div class="w3-third w3-margin-left mt-4">
                <label for="genero" class="formulario__label"><b>Genero</b></label>
                    <select name="gen_id" class="w3-input w3-border w3-round-large" required="required">
                        <option class="" id="genero" value="" placeholder=""><--Seleccionar-->
                            <?php
                                            
                            foreach ($generos as $gen) {
                                echo "<option value='".$gen['gen_id']."'>".$gen['gen_nombre']."</option>";
                            } 
                                            
                            ?>
                        </option>
                    </select>
            </div>

            <div class="w3-third w3-margin-left ms-5 mt-4" id="grupo__hobbies">
                <label for="hobbies" class="form-label"> <b> Hobbies</b> </label>
                <br>
                    <?php                       
                        foreach ($hobbies as $hob) {
                                            
                            echo "<input type=checkbox name=hob_id[] role=switch id=hob_id  value='".$hob['hob_id']."'>".$hob['hob_nombre']."<br>";
                        }
                                
                    ?>                      
            </div>

            <div class="w3-margin-top col-4" style="float: right;">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-blue w3-medium w3-block col-4" style="float: right;">
            </div>

        </div>    
    </form>

</div>

<br><br><br><br>