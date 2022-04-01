<?php
require_once("../../template/Plantilla_Formulario.PHP");
?>
<div class="formulario">
<form  action="../controlador/login.php"  method="POST">
    <div class="mb-3">
        <label >Nombres completos</label>
        <input type="text" class="form-control" name="email"  aria-describedby="emailHelp">

        <label >Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="Digite una contraseña minimo de 8 caracteres" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" name="btn_enviar" class="btn btn-primary">Ingresar</button>
</form>
</div>