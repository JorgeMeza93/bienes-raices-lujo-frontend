<?php
    require "../../includes/config/database.php";
    $db = conectarDB();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        $titulo = $_POST["titulo"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $habitaciones = $_POST["habitaciones"];
        $banos = $_POST["banos"];
        $estacionamiento = $_POST["estacionamiento"];
        $vendedorId = $_POST["vendedor"];

        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$banos', 
            '$estacionamiento', '$vendedorId')";
        echo $query;
        $resultado = mysqli_query($db, $query);
        if($resultado){
            echo "Insertado correctamente";
        }
        echo "</pre>";
    }
    require "../../includes/funciones.php";
    includeTemplate("header")
?>
<main class="contenedor seccion">
    <h1>Crear Propiedad</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>
    <form class="formulario" action="/admin//propiedades/crear.php" method="POST">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título Propiedad" />

            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" placeholder="Precio Propiedad" />

            <label for="imagen">Imagen de la Propiedad</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ejemplo: 4" min="1" max="12">

            <label for="banos">Baños</label>
            <input type="number" name="banos" id="banos" placeholder="Ejemplo: 1" min="1" max="12">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ejemplo: 1" min="1" max="5">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
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