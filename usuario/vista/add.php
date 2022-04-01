<?php
require_once("../../template/Plantilla_Formulario.PHP");
?>
<div class="formulario">
<form  action="../controlador/add.php"  method="POST">
    <div class="mb-3">
        <label >Nombres completos</label>
        <input type="text" class="form-control" name="nombre"  aria-describedby="emailHelp">
        <label >Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="emailHelp">
        <label >Contraseña</label>
        <input type="password" class="form-control" name="contraseña" placeholder="Digite una contraseña minimo de 8 caracteres" aria-describedby="emailHelp">
        
    </div>
    
    <button type="submit" name="btn_enviar" class="btn btn-primary">Registrar</button>
</form>
</div>