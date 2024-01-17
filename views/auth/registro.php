
<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebcamp</p>

    <form method="POST" action="/registro" class="formulario">   
    <?php include_once __DIR__ . '/../templates/alertas.php' ?>
         <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="nombre" class="formulario__input" placeholder="Tu nombre" id="nombre" name="nombre"
             value="<?php echo $usuario->nombre; ?>" >
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" class="formulario__input" placeholder="Tu apellido" id="apellido" name="apellido" value="<?php echo $usuario->apellido; ?>" >
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email" name="email" >
        </div>

        
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" class="formulario__input" placeholder="Tu Password" id="password" name="password" >
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Confirmar Password</label>
            <input type="password" class="formulario__input" placeholder="Tu Password2" id="password2" name="password2" >
         </div>

        <input type="submit" class="formulario__submit" value="Crear cuenta">

    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password? Obtener una</a>
    </div> 
</main>
