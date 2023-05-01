<?php include "includes/templates/header.php";?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        </picture>
        <h2>Llene el formulario de contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre: </label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="nombre"/>

                <label for="apellido">Apellido: </label>
                <input type="text" placeholder="Tus Apellidos" id="apellido" name="apellido"/>

                <label for="email">Email: </label>
                <input type="email" placeholder="Tu Email" id="email" name="email"/>

                <label for="telefono">Teléfono: </label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono" name="telefono"/>

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" placeholder="Escribe un mensaje" id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones" name="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>
                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number" placeholder="Tu precio o Presupuesto" id="presupuesto" name="presupuesto">
            </fieldset>
            <fieldset>
                <legend>Forma de Contacto</legend>
                <p>¿Cómo desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contacto-telefono">Teléfono</label>
                    <input type="radio" name="contacto" value="telefono" id="contacto-telefono">
                    <label for="contacto-email">Email</label>
                    <input type="radio" name="contacto" value="email" id="contacto-email">
                </div>
                <p>Si eligió teléfono, detalle un horario para ser contactado</p>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha">
                <label for="hora">Fecha</label>
                <input type="time" id="hora" name="hora" min="08:00" max="19:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2023 &copy;</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>