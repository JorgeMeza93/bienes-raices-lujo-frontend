<?php
    require "../../includes/config/database.php";
    $db = conectarDB();
    $consultaVendedores = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consultaVendedores);
    $errores = [];
    $titulo = "";
    $precio = "";
    $descripcion = "";
    $habitaciones = "";
    $banos = "";
    $estacionamiento = "";
    $vendedorId = "";
    $creado = date("Y/m/d");

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $titulo = mysqli_real_escape_string($db, trim($_POST["titulo"]));
        $precio = mysqli_real_escape_string($db, trim($_POST["precio"]));
        $descripcion = mysqli_real_escape_string($db, trim($_POST["descripcion"]));
        $habitaciones = mysqli_escape_string($db, trim($_POST["habitaciones"]));
        $banos = mysqli_escape_string($db, trim($_POST["banos"]));
        $estacionamiento = mysqli_escape_string($db, trim($_POST["estacionamiento"]));
        $vendedorId = mysqli_escape_string($db, trim($_POST["vendedor"]));
        if(!$titulo){
            $errores[] = "Debes añadir un título";
        }
        if(!$precio){
           $errores[] = "El precio es un campo obligatorio";
        }
        if(!$descripcion || strlen($descripcion) <50){
            $errores[] = "La descripción es un campo de por lo menos 50 caracteres";
        }
        if(!$habitaciones){
            $errores[] = "Debes especificar el número de habitaciones";
        }
        if(!$banos){
            $errores[] = "Debes especificar el número de baños";
        }
        if(!$estacionamiento){
            $errores[] = "Debes especificar el número de lugares de estacionamientos";
        }
        if(!$vendedorId){
            $errores[] = "Debes elegir un vendedor";
        }
        //Si por lo menos hay un error en el array de errores no se ejecutara el siguiente código
        if(empty($errores)){
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, banos, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', 
            '$habitaciones', '$banos', '$estacionamiento', $creado, '$vendedorId')";
            $resultado = mysqli_query($db, $query);
            if($resultado){
                //Redireccionamiento
                header("Location: /admin");
            }
        }

    }
    require "../../includes/funciones.php";
    includeTemplate("header")
?>
<main class="contenedor seccion">
    <h1>Crear Propiedad</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>
    <?php foreach($errores as $error):?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach ?>
    <form class="formulario" action="/admin//propiedades/crear.php" method="POST">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título Propiedad" value="<?php echo $titulo?>" />

            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>"/>

            <label for="imagen">Imagen de la Propiedad</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ejemplo: 4" min="1" max="12" value="<?php echo $habitaciones?>">

            <label for="banos">Baños</label>
            <input type="number" name="banos" id="banos" placeholder="Ejemplo: 1" min="1" max="12" value="<?php echo $banos?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ejemplo: 1" min="1" max="5" value="<?php echo $estacionamiento?>">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedorId === $vendedor["id"] ? "selected" : ""; ?> value="<?php $vendedor["id"] ?>"><?php echo $vendedor["nombre"] . " " . $vendedor["apellido"] ?></option>
                <?php endwhile?>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>
<?php
    includeTemplate("footer");
?>