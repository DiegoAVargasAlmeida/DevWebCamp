<div id="eventoinfo" data-id="<?php echo $evento->id; ?>" class="evento swiper-slide">



<p class="evento__hora"><?php echo $evento->hora->hora; ?></p>
    <div class="evento__informacion"> 
     <a class="evento__enlace" href="/eventoinfo?id=<?php echo $evento->id; ?>"></a>
        <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>
        <p class="evento__descripcion"><?php echo $evento->descripcion; ?></p>


        <div  class="evento__autor-info">
            <picture class="evento__imagen">
                <source srcset="img/speakers/<?php echo  $evento->ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="img/speakers/<?php echo  $evento->ponente->imagen; ?>.png" type="image/png">
                <img class="evento__imagen-autor" width="200" height="300" src="img/speakers/<?php echo  $evento->ponente->imagen; ?>.png" alt="Imagen ponente">

            </picture>

            <p class="evento__autor-nombre">
                <?php echo  $evento->ponente->nombre . " " .  $evento->ponente->apellido; ?>
            </p>
        </div>
    </div>
</div>