$(document).ready(function(){

    $(document).on("click","#cambiarImagen", function(){
        var ruta=$("#imagenCiudad").attr("src");

        $("#imagen").html("<input type='file' name='ciu_img'>");
        $("#imagen").append("<input type='hidden' name='eliminarImagen' value='"+ruta+"'>");

    });

    $(document).on("keyup","#buscar",function() {
        var buscar =$(this).val();
        var url=$(this).attr("data-url");
    
        $.ajax({
            url:url,
            data: "buscar="+buscar,
            type:"POST",
            success:function(datos){
                $("tbody").html(datos);
            }
        }) 
    });
});
