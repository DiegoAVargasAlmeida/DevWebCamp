<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>

    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div data-aos="<?php aos_animacion();?>" class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">

                <img src="build/img/sobre_devwebcamp.jpg" alt="Imagen devwebcamp" loading="lazy" width="200" height="300">
            </picture>
        </div>

        <div data-aos="<?php aos_animacion();?>" class="devwebcamp__contenido">
            <p  class="devwebcamp__texto" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Curabitur elementum ac neque ut pretium. Pellentesque commodo velit eget mi tincidunt,
                 sit amet aliquet arcu ultricies. Praesent eget ultrices elit. Quisque maximus ullamcorper diam,
                  ac tempor justo ultrices ap</p>

                 <p  class="devwebcamp__texto" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Curabitur elementum ac neque ut pretium. Pellentesque commodo velit eget mi tincidunt,
                 sit amet aliquet arcu ultricies. Praesent eget ultrices elit. Quisque maximus ullamcorper diam,
                  ac tempor justo ultrices ap</p>
        </div>
    </div>
</main>