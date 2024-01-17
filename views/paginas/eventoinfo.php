<main class="eventoinfo">
    <h2 class="eventoinfo__heading"><?php echo $titulo; ?></h2>


    <div class="eventoinfo__grid">

        <div class="eventoinfo__ponente">
            <h3 class="eventoinfo__nombre">Ponente</h3>

            <div class=" eventoinfo__autor-info">
                <div class="eventoinfo__t">


                    <div class="speaker__informacion">

                        <h4 class="speakerinfo__nombre">
                            <?php echo $ponente->nombre . " " . $ponente->apellido; ?>
                        </h4>

                        <p class="speaker_ubicacion"><?php echo $ponente->ciudad . ", " . $ponente->pais; ?></p>

                        <nav class="speaker-sociales">
                            <?php
                            $redes = json_decode($ponente->redes);
                            ?>
                            <?php if (!empty($redes->facebook)) { ?>
                                <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href=" <?php echo $redes->facebook; ?>">
                                    <span class="speaker-sociales__ocultar">Facebook</span>
                                </a>
                            <?php   } ?>
                            <?php if (!empty($redes->twitter)) { ?>
                                <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter; ?>">
                                    <span class="speaker-sociales__ocultar">Twitter</span>
                                </a>
                            <?php   } ?>
                            <?php if (!empty($redes->youtube)) { ?>
                                <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->youtube; ?>">
                                    <span class="speaker-sociales__ocultar">YouTube</span>
                                </a>
                            <?php   } ?>
                            <?php if (!empty($redes->instagram)) { ?>
                                <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                                    <span class="speaker-sociales__ocultar">Instagram</span>
                                </a>
                            <?php   } ?>
                            <?php if (!empty($redes->tiktok)) { ?>
                                <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->tiktok; ?>">
                                    <span class="speaker-sociales__ocultar">Tiktok</span>
                                </a>
                            <?php   } ?>
                            <?php if (!empty($redes->github)) { ?>

                                <a class="speaker-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->github; ?>">
                                    <span class="speaker-sociales__ocultar">Github</span>
                                </a>
                            <?php   } ?>


                        </nav>


                    </div>
                    <picture class="eventoinfo__imagen">
                        <source srcset="img/speakers/<?php echo  $evento->ponente->imagen; ?>.webp" type="image/webp">
                        <source srcset="img/speakers/<?php echo  $evento->ponente->imagen; ?>.png" type="image/png">
                        <img class="eventoinfo__imagen-autor" width="200" height="300" src="img/speakers/<?php echo  $evento->ponente->imagen; ?>.png" alt="Imagen ponente">

                    </picture>

                </div>
  
                
                <ul class="speaker__listado-skills">

                    <?php
                    $tags = explode(',', $ponente->tags);
                    
                    foreach ($tags as $tag) { ?>

                        <li class="speaker__skill"> <?php echo $tag; ?> </li>

                    <?php } ?>
                </ul>
            </div>



        </div>






        <div class="eventoinfo__conferencia">
        <h3 class="eventoinfo__nombre--conferencia"><?php echo substr($categoria->nombre,0,-1); ?>:</h3>
        <h4 class="eventoinfo__nombre"><?php echo  $evento->nombre; ?>:</h4>
            <div class="eventoinfo__contenido">
                <p class="eventoinfo__texto"> <?php echo $evento->descripcion; ?></p>
             
             
            </div>

        </div>
    </div>
</main>