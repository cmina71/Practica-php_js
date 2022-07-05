<div>
<?php
      if (isset($_SESSION['usu_nombre'])) {
        echo "<div class='col-4' style='margin-top: 15px; float: right; color: black;'><b> Bienvenido Administrador ".$_SESSION['usu_nombre']."&nbsp;&nbsp;&nbsp;&nbsp;</b>";
        ?> <a title="CerrarSesion" href="<?php echo getUrl("Login","Login","cerrarSesion"); ?>" ><img src="puerta.png" alt="CerrarSesion" style="width: 20%; border-radius: 15%; float: right;" class="w3-image"></img></a></div> <?php
      }
    ?>
  <img src="sena.png" alt="Inicio" style="width: 10%; margin-top: 8px; border-radius: 15%; margin-right: 5px;" class="w3-image"></img>
  <a title="Inicio" href="<?php echo getUrl("Login","Login","indexAdmin"); ?>"><img src="Opto.png" alt="Inicio" style="width: 10%; margin-top: 8px; border-radius: 15%;" class="w3-image"></img></a>
  </div>
<div class="w3-theme-black">
  <div class="w3-row fixed-bottom w3-padding">
    
    <a href="javascript:void(0)" onclick="openSubMenu(event, 'Usuario');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-border-blue w3-padding w3-animate-zoom back w3-text-black">Usuario</div>
    </a>
    
    <a href="javascript:void(0)" onclick="openSubMenu(event, 'Registros');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-border-green w3-padding w3-animate-zoom back w3-text-black">Registros</div>
    </a>

    <a href="javascript:void(0)" onclick="openSubMenu(event, 'Pacientes');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-border-blue w3-padding w3-animate-zoom back w3-text-black">Pacientes</div>
    </a>
    
  </div>

  <div class="w3-row fixed-bottom w3-margin-bottom mb-5">
    <div id="Usuario" class="w3-container w3-center w3-animate-bottom subMenu w3-third" style="display:none">
      <a class="dropdown-item w3-container w3-blue" href="<?php echo getUrl("Usuario","Usuario","getInsert"); ?>">Registrar Usuario</a>
      <a class="dropdown-item w3-container w3-blue" href="<?php echo getUrl("Usuario","Usuario","consult"); ?>">Consultar Usuarios</a>
    </div>

    <div id="Registros" class="w3-container w3-center w3-animate-bottom subMenu w3-third pb1" style="display:none; margin-left: 33%;">
      <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl("Generico","Generico","consult",array("tabla"=>"roles", "campo"=>"rol")); ?>">Roles</a>
      <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl("Generico","Generico","Consult",array("tabla"=>"estratos", "campo"=>"estr")); ?>">Estratos</a>
      <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl("Generico","Generico","Consult",array("tabla"=>"generos", "campo"=>"gen")); ?>">Géneros</a>
      <a class="dropdown-item w3-container w3-green" href="<?php echo getUrl("Generico","Generico","Consult",array("tabla"=>"hobbies", "campo"=>"hob")); ?>">Hobbies</a>
    </div>

    <div id="Pacientes" class="w3-container w3-center w3-animate-bottom subMenu w3-third" style="display:none; margin-left: 66%;">
      <a class="dropdown-item w3-container w3-blue" href="<?php echo getUrl("Paciente","Paciente","consulta"); ?>">Consultar Pacientes</a>
    </div>
  </div>

</div>

<script>
function openSubMenu(evt, SubMenu) {
  var i, x, tablinks;
  x = document.getElementsByClassName("subMenu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-dark-grey", "");
  }
  document.getElementById(SubMenu).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-dark-grey";
}

</script>

</body>
</html>
