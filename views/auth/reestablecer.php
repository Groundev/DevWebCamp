<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca Tu Nueva Contraseña</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if($token_valido) { ?>
    <form method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input class="formulario__input" type="password" id="password" placeholder="Nueva Contraseña" name="password">
        </div>

        <input type="submit" class="formulario__submit" value="Guardar Contraseña">
    </form>
<?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia Sesión</a>
        <a href="/registro" class="acciones__enlace">Crea aquí tu cuenta</a>
    
    </div>
</main>