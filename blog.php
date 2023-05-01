<?php include "includes/templates/header.php";?>
    </header>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog"/>
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el <span>12/10/2004</span> por: <span>Admin Manolo</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog"/>
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para el decorado Interior de tu hogar</h4>
                    <p>Escrito el <span>21/08/2007</span> por: <span>Admin Pipo</span></p>
                    <p>
                        Aprende a decorar tu hogar con las tendencias actuales de decorado de interiores. Combina muebles y colores para darle vida a tu casa.
                    </p>
                </a>
            </div>
        </article>
    </main>
    <?php include "includes/templates/footer.php" ?>