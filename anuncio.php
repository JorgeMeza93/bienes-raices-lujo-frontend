<?php 
    require "includes/funciones.php";
    includeTemplate("header")
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="icono-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono de baño">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono de estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono de habitacion">
                    <p>4</p>
                </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eius id quos blanditiis autem aliquam obcaecati quaerat ipsum at ab quia aspernatur hic adipisci, tenetur harum doloremque beatae voluptate incidunt qui. 
                Veritatis tempore natus accusantium quaerat atque inventore quasi totam repellat libero similique, ex repudiandae ullam quos blanditiis eaque placeat ea beatae veniam. Exercitationem quam, nesciunt assumenda ducimus
                quia earum. Facilis veniam molestias, voluptas, aperiam, rerum totam nisi doloribus ullam ex excepturi facere minima placeat incidunt nesciunt voluptates maxime! Distinctio suscipit, sunt tempora fugiat vel neque 
                explicabo atque! Dolorem libero consectetur corrupti id delectus maiores expedita. Maiores quasi maxime temporibus!
            </p>
        </div>
    </main>
    <?php include "includes/templates/footer.php" ?>