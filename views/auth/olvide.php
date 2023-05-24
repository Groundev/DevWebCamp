<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu contraseña enviando un email de confirmación</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input class="formulario__input" type="email" id="email" placeholder="Tu email" name="email">
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia Sesión</a>
        <a href="/registro" class="acciones__enlace">Crea aquí tu cuenta</a>
    
    </div>

</main>