<hr>
<div class='container'>
    <?php
        foreach($noticias as $noticia)
        {
            echo "<div class='row p-5'>".
                "<div class='col'>".
                    "<div class='card'>".
                        "<div class='card-header'>".
                            "<ul class='list-inline'>".
                                "<li class='list-inline-item'><h5>Publicado: </h5></li>".
                                "<li class='list-inline-item'><h6>".$noticia->fecha."</h6></li>".
                                "<li class='list-inline-item'><h5>Editor: </h5></li>".
                                "<li class='list-inline-item'><h6>LIBRES-ADMIN</h6></li>".
                            "</ul>".
                        "</div>".
                        "<img class='card-img-top' src='".base_url()."uploads/".$noticia->imagen1."' alt='imagen noticia'>".
                        "<div class='card-body'>".
                            "<h5 class='card-title'>".$noticia->titulo."</h5>".
                            "<p class='card-text'>".$noticia->descripcion."</p>".
                            "<a href='".base_url()."blog/ver/".$noticia->id."' class='btn btn-primary'>Leer más</a>".
                        "</div>".
                    "</div>".
                "</div>".
            "</div>";
        }
    ?>
</div>