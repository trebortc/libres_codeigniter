<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <div class="jumbotron" style="background:transparent !important">
                <h1 class="tam-letra-3 font-weight-bold">Libro Testimonial</h1><br>
                <p class="lead text-justify tam-letra-0">En el marco de la investigación “Bullying homofóbico en Quito” el equipo de la Universidad de Las Américas y la Red Ecuatoriana de Psicología por la Diversidad LGBTI - REPsiD, realizó 38 entrevistas a personas que narraron sus experiencias de bullying homofóbico durante su adolescencia, testimonios que permiten evidenciar la problemática del bullying homofóbico en el texto; "Los rostros ocultos del bullying homofóbico en Quito".</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class='col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11'>
            <div class='row justify-content-center'>
                <?php
                    foreach ($testimoniales as $testimonial) 
                    {               
                        echo "<div class='col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5'>".
                                    "<div class='card' style='width: 30rem'>". 
                                        "<img class='card-img-top' src='".base_url()."uploads/".$testimonial->imagen1."' alt='Imagen libro'>".
                                        "<div class='color-1 borde-ancho'></div>".
                                        "<div class='card-body'>".
                                            "<h1 class='card-title font-weight-bold tam-letra-3'>".$testimonial->titulo."</h1>".
                                            "<p class='card-text text-justify tam-letra-0'>".$testimonial->descripcion."...</p>".
                                            "<a href='".$testimonial->url."' class='btn btn-dark float-right mr-4' target='_blank'>LEER MÁS</a>".
                                        "</div>".
                                    "</div>".
                            "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>