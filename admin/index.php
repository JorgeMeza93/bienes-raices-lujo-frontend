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
                <tr>
                    <td>1</td>
                    <td>Casa en la Playa</td>
                    <td><img src="/imagenes/308be145d2f183af09859908ef91359e.jpg" class="imagen-tabla"></td>
                    <td>$120000</td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block" >Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
<?php 
    includeTemplate("footer")
?>