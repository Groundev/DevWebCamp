<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input type="text" class="formulario__input" id="nombre" name="nombre" 
        placeholder="Nombre Ponente" value="<?php echo $ponente->nombre ?? '' ;?>" >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción Evento</label>
        <textarea class="formulario__input" id="descripcion" name="descripcion" 
        placeholder="Descripción Ponente" rows="6" value="<?php echo $ponente->descripcion ?? '' ;?>" ></textarea>
    </div>

</fieldset>