<div class="mt-5 btn-lg px-4 gap-3 pb-2 border-start border-4 border-dark shadow  bg-success" style="color: white;">
    <h3 class="display-4"><b>Registrar <?php echo ucfirst($tabla); ?></b></h3>
</div>

<div  class="mt-4 border-start border-4 border-dark shadow p-3 mb-5 bg-body rounded">
    

    <div class="mt-3 w3-container">
        <form action="<?php echo getUrl2("Generico","Generico","postInsert2",array("tabla"=>$tabla, "campo"=>$campo));?>" method="post">

            <div class="row w3-container"> 
                <div class="col-md-4">
                    <label class="form-label" style="font-size: 20px;"><b> Nombre <?php echo $tabla; ?> </b></label>
                    <input type="text" name="nombre" class="w3-input w3-border w3-round-large" placeholder="Nombre..." required="required">
                </div>

                <div class="col md-4 mt-4">
                    <input type="submit" value="Registrar" class="w3-btn w3-round-xlarge w3-green w3-medium w3-block col-md-4 mt-3">
                </div>

                
            </div>

        </form>
    </div>
</div>