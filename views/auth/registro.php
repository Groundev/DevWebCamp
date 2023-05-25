<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/registro" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input class="formulario__input" type="text" id="nombre" placeholder="Tu nombre" name="nombre" value="<?php echo $usuario->nombre;?>">
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input class="formulario__input" type="text" id="apellido" placeholder="Tu Apellido" name="apellido" value="<?php echo $usuario->apellido;?>">
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input class="formulario__input" type="email" id="email" placeholder="Tu email" name="email" value="<?php echo $usuario->email;?>">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input class="formulario__input" type="password" id="password" placeholder="Tu Contraseña" name="password">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <input class="formulario__input" type="password" id="password2" placeholder="Repetir Contraseña" name="password2">
        </div>
        <input type="submit" class="formulario__submit" value="Registrar Cuenta">
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Contraseña?</a>
    </div>

</main>