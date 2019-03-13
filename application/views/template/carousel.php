<div class="container-fluid m-0 p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
                $b = TRUE;
                foreach($banners as $banner)
                {
                    echo "<div class='carousel-item ".($b? 'active':'')."'>".
                        "<img class='d-block w-100' src='".base_url()."uploads/".$banner->imagen1."' alt='First slide'>".
                        "<div class='carousel-caption'>".
                            "<div class='contenido-carousel'>".
                                "<h1 class='font-weight-bold tam-letra-4'>".$banner->titulo."</h1>".
                                "<p class='tam-letra-c'>".$banner->descripcion."</p>".
                                //"<a type='button' href='".base_url()."banner/ver/".$banner->id."' class='btn btn-secondary float-right'>Más información</a>".
                            "</div>".
                        "</div>".
                        "</div>";
                    $b = FALSE;
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">                   
            <i class="fa fa-caret-left fa-5x" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fa fa-caret-right fa-5x" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <img class="img-fluid" src="<?php echo base_url();?>assets/img/linea.png" alt="First slide">
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-7 col-xl-7">
            <br>
            <p class="lead text-justify tam-letra-0">
                LIBRES es un nombre inspirado en la libertad de ser quienes somos y ser respetados. Como proyecto aportamos a erradicar prácticas de violencia escolar, bullying, por motivos de discriminación por orientación sexual y/o identidad de género. Creemos que mientras más sabemos sobre las causas del bullying homo y transfóbico, más eficaz somos en intervenir en el ciclo de violencia. Visite nuestra página Te Ayudamos para encontrar servicios y recursos de apoyo para jóvenes, educadores/as, familias o psicólogas/os etc.
            </p>
            <br>
        </div>
    </div>
</div>
<div class="container-fluid color-1 p-4">
    <div class="row justify-content-center p-4">
        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6">
            <h1 class="text-center text-white tam-letra-3">¿Has sufrido o sufres de <br><strong>BULLYING HOMOFÓBICO?</strong></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 text-center">
            <a href="<?php echo base_url();?>inicio/contacto" class="btn btn-primary btn-lg font-weight-bold" role="button">PODEMOS <br> APOYARTE</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 text-center">
            <i class="fa fa-caret-up fa-3x text-white" aria-hidden="true"></i>
            <h4 class="text-white">CLICK AQUÍ</h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center p-3">
        <div class="col-9">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 d-flex align-items-end">
                    <h1 class="tam-letra-2">Encuentra<br><strong>MÁS RECURSOS</strong> </h1>
                </div>
                <div class="col-12 col-sm-7 col-md-5 col-lg-5 col-xl-5 d-flex align-items-center">
                    <div class="text-center">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/personas.png" alt="First slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>