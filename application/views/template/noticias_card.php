<div class="container-fluid color-1">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-9">
            <div class="row justify-content-center">
                <div class="col d-flex align-items-center border-der">
                    <h1 class="display-1 font-weight-bold text-white">BLOG</h1>
                </div>
                <?php
                    $i=0;
                    foreach($noticias as $noticia)
                    {
                        echo "<div class='col'>".
                            "<div class='card borde-card-peq color-1'>".
                                "<div class='card-body'>".
                                    "<h4 class='card-title text-white font-weight-bold'>".$noticia->titulo."</h4>".
                                    "<p class='card-text text-white lead text-justify'>".$noticia->descripcion."</p>".
                                    "<a class='btn btn-danger float-right pl-4 pr-4 font-weight-bold' href='".base_url()."blog/ver/".$noticia->id."' class='btn btn-primary'>LEER MÁS</a>".
                                "</div>".
                            "</div>".
                        "</div>";

                        if($i++==1){
                            break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>