<div>
<?php
      if (isset($_SESSION['usu_nombre'])) {
        echo "<div class='col-4' style='margin-top: 15px; float: right; color: black;'><b> Bienvenido Optometra ".$_SESSION['usu_nombre']."&nbsp;&nbsp;&nbsp;&nbsp;</b>";
        ?> <a title="CerrarSesion" href="<?php echo getUrl("Login","Login","cerrarSesion"); ?>" ><img src="puerta.png" alt="CerrarSesion" style="width: 20%; border-radius: 15%; float: right;" class="w3-image"></img></a></div> <?php
      }
    ?>

<img src="sena.png" alt="Inicio" style="width: 10%; margin-top: 8px; border-radius: 15%; margin-right: 5px;" class="w3-image"></img>
<a title="Inicio" href="<?php echo getUrl2("Login","Login","indexOpto"); ?>" ><img src="Opto.png" alt="Logo" style="width: 10%; margin-top: 8px;" class="w3-image"></img></a>
</div>
<div class="w3-theme-black">
  <div class="w3-row fixed-bottom w3-padding">

    <a href="javascript:void(0)" onclick="openCity(event, 'Paciente');"  style="color: #FF0000; text-decoration: none;">
      <div class=" tablink w3-bottombar w3-hover-light-grey w3-border-blue w3-padding w3-animate-zoom w3-text-black w3-half"><b>Paciente</b></div>
    </a>

    <a href="javascript:void(0)" onclick="openCity(event, 'Registros');"  style="color: #FF0000; text-decoration: none;">
      <div class=" tablink w3-bottombar w3-hover-light-grey w3-border-green w3-padding w3-animate-zoom w3-text-black"><b>Registros</b></div>
    </a> 

  </div>

<div class="w3-row fixed-bottom w3-margin-bottom mb-5">
  <div id="Paciente" class="w3-container w3-center w3-animate-bottom city w3-half" style="display:none">
    <a class="dropdown-item w3-container w3-blue" href="<?php echo getUrl2("Paciente","Paciente","getInsert"); ?>">Registrar Paciente</a>
    <a class="dropdown-item w3-container w3-blue" href="<?php echo getUrl2("Paciente","Paciente","consult"); ?>">Consultar Pacientes</a>
  </div>

  <div id="Registros" class="w3-container w3-center w3-animate-bottom city w3-half" style="display:none; margin-left: 50%;">
    <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl2("Generico","Generico","getInsert2",array("tabla"=>"estratos", "campo"=>"estr")); ?>">Estratos</a>
    <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl2("Generico","Generico","getInsert2",array("tabla"=>"generos", "campo"=>"gen")); ?>">Géneros</a>
    <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl2("Generico","Generico","getInsert2",array("tabla"=>"hobbies", "campo"=>"hob")); ?>">Hobbies</a>
  </div>

</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-dark-grey";
  }
</script>

</body>
</html>
