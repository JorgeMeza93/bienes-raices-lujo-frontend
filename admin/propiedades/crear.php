<?php
    require "../../includes/config/database.php";
    $db = conectarDB();
    require "../../includes/funciones.php";
    includeTemplate("header")
?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>
    <form class="formulario">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" placeholder="Título Propiedad" />

            <label for="precio">Precio</label>
            <input type="number" id="precio" placeholder="Precio Propiedad" />

            <label for="imagen">Imagen de la Propiedad</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la Propiedad</legend>
            
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ejemplo: 4" min="1" max="12">
            
            <label for="banos">Baños</label>
            <input type="number" id="banos" placeholder="Ejemplo: 1" min="1" max="12">
            
            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" placeholder="Ejemplo: 1" min="1" max="5">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select>
                <option value="1">Manolo</option>
                <option value="2">Pipo</option>
                <option value="3">Monstruo</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>
<?php
    includeTemplate("footer");
?>