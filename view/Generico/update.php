<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-success" style="color: white;">
    <h3 class="display-4"><b>Editar <?php echo ucfirst($tabla); ?></b></h3>
</div>

<div class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded"> 
    <?php
        foreach ($generico as $gen) { 
    ?>
    <div class="mt-3 w3-container">
    <form action="<?php echo getUrl("Generico","Generico","postUpdate");?>" method="post">

        <div class="row w3-container">
            <div class="col-md-4">
                <label class="form-label" style="font-size: 25px;"><b>Nombre <?php echo substr($tabla, 0, -1); ?></b></label>
                <input type="hidden" name="id" value="<?php echo $gen[$campoId];?>">
                <input type="text" name="nombre" class="w3-input w3-border w3-round-large" required="required" value="<?php echo $gen[$campoNombre];?>">
                <input type="hidden" name="campo" value="<?php echo $campo; ?>">
                <input type="hidden" name="tabla" value="<?php echo $tabla; ?>">
            </div>

            <div class="col md-4 mt-4">
                <input type="submit" value="Enviar" class="w3-btn w3-round-xlarge w3-green w3-medium w3-block col-md-4 mt-4">
            </div>
        </div>

        
    </div>
    </form>
    <?php
    }
    ?>
</div>