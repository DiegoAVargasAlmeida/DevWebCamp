
<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Tu Cuenta DevWebCamp</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>
<?php if(isset($alertas['exito'])) {?>
  

<div class="acciones acciones--center">
        <a href="/login" class="acciones__enlace">¿ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password? Obtener una</a>
    </div> 
<?php   }?>
</main>
