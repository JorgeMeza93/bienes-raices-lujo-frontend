<?php 
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
        
    </main>
<?php 
    includeTemplate("footer")
?>