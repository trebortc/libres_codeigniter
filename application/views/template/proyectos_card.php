<div class="container-fluid color-1">
    <div class="row pt-4 pb-3 justify-content-center">
        <div class='col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11'>
            <div class='row justify-content-center'>
                <?php
                    foreach ($proyectos as $proyecto) 
                    {               
                        echo "<div class='col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6'>".
                                    "<div class='card'>".
                                        "<img class='card-img-top' src='".base_url()."assets/img/enterate1.png"."' alt='Card image cap'>".
                                        "<div class='color-1 borde-ancho'></div>".
                                        "<div class='card-body'>".
                                            "<h4 class='card-title font-weight-bold'>LOREM IPSUM</h4>".
                                            "<p class='card-text text-justify'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>".
                                            "<p class='card-text text-justify'>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero </p>".
                                            "<a href='#' class='btn btn-dark float-right'>DESCARGAR PDF</a>".
                                            "<a href='#' class='btn btn-dark float-right mr-4'>LEER MÁS</a>".
                                        "</div>".
                                    "</div>".
                            "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid color-2">
    <div class="row pt-4 pb-4">
        <div class="col offset-1">
            <div class="d-flex flex-row align-items-center">
                <div>
                    <h1 class="pr-3 text-white">Más Estudios</h1>
                </div>
                <div>
                    <a href="#" class="btn btn-secondary btn-lg" role="button">AQUÍ</a>   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-11">
            <div class="row pb-3 justify-content-center">
                <div class="col col-sm-9 col-md-9 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/vida.png" class="img-fluid" alt="">
                </div>
                <div class="col-11 col-sm-7 col-md-4 col-lg-4 col-xl-4 d-flex align-items-center">
                    <p class="lead text-justify"> 
                    En Ecuador se reporta que casi el 60% de los estudiantes entre 11 y 18 años en el territorio nacional reportan haber sido víctimas de un acto violento en la escuela. Es decir 3 de cada 5 estudiantes han vivido violencia en sus unidades educativas. 
                    </p>
                </div>
                <div class="col col-sm-9 col-md-9 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/vida.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row pb-3 justify-content-center">
                <div class="col col-sm-9 col-md-9 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/vida.png" class="img-fluid" alt="">
                </div>
                <div class="col-11 col-sm-7 col-md-4 col-lg-4 col-xl-4 d-flex align-items-center">
                    <p class="lead text-justify"> 
                    En Ecuador se reporta que casi el 60% de los estudiantes entre 11 y 18 años en el territorio nacional reportan haber sido víctimas de un acto violento en la escuela. Es decir 3 de cada 5 estudiantes han vivido violencia en sus unidades educativas. 
                    </p>
                </div>
                <div class="col col-sm-9 col-md-9 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/vida.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>