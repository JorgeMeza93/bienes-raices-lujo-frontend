<?php 

    //Importar la conexion
    require "../includes/config/database.php";
    $db = conectarDB();
    $query = "SELECT * FROM propiedades";
    $resultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET["resultado"] ?? null;
    require "../includes/funciones.php";
    includeTemplate("header");
?>
    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>
        <?php  if( intval($resultado) === 1): ?>
            <p class="exito">Anuncio creado correctamente</p>
        <?php endif?>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
        
        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                    <tr>
                        <td><?php echo $propiedad["id"]; ?></td>
                        <td><?php echo $propiedad["titulo"] ?></td>
                        <td><img src="/imagenes/<?php echo $propiedad["imagen"]; ?>" class="imagen-tabla"></td>
                        <td><?php echo $propiedad["precio"] ?></td>
                        <td>
                            <a href="#" class="boton-rojo-block">Eliminar</a>
                            <a href="#" class="boton-amarillo-block" >Actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </main>
<?php 
    mysqli_close($db);
    includeTemplate("footer");
?>