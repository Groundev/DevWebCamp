<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Incia Sesion en DevWebCamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input class="formulario__input" type="email" id="email" placeholder="Tu email" name="email">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input class="formulario__input" type="password" id="password" placeholder="Tu Contraseña" name="password">
        </div>
        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>
    <div class="acciones">
        <a href="/registro" class="acciones__enlace">Crea aquí tu cuenta</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Contraseña?</a>
    </div>

</main>