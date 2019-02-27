<div class="container-fluid color-1">
    <div class="row pt-4 pb-3 justify-content-center">
        <div class='col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11'>
            <div class='row justify-content-center'>
                <?php
                $i=0;
                    foreach ($proyectos as $proyecto) 
                    {               
                        echo "<div class='col-7 col-sm-12 col-md-12 col-lg-5 col-xl-5'>".
                                    "<div class='card'>". 
                                        "<img class='card-img-top img-fluid' src='".base_url()."uploads/".$proyecto->imagen1."' alt='Imagen libro'>".
                                        "<div class='color-1 borde-ancho'></div>".
                                        "<div class='card-body'>".
                                            "<h1 class='card-title font-weight-bold tam-letra-3'>".$proyecto->titulo."</h1>".
                                            "<p class='card-text text-justify tam-letra-0'>".$proyecto->descripcion."...</p>".
                                            "<a href='".$proyecto->precio."' class='btn btn-dark float-right mr-4' target='_blank'>LEER MÁS</a>".
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
<div class="container-fluid color-2">
    <div class="row pt-4 pb-4 pl-5">
        <div class="col-12 col-sm-4 col-lg-3 col-xl-3 offset-sm-1 offset-lg-1 offset-xl-1 pl-5">
            <center><h1 class="pr-3 text-white tam-letra-2">Más Estudios</h1></center>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 col-xl-3 pl-5">
            <center><a href="<?php echo base_url();?>inicio/estudios" class="btn btn-secondary btn-lg" role="button">AQUÍ</a></center>
        </div>
    </div>
</div>
<div class="container-fluid color-4">
    <div class="row justify-content-center pt-5 pb-5 pl-5 pr-5">
        <div class="col-12 col-sm-12 col-lg-10 col-xl-10">
            <div class="row pb-3 justify-content-center">
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/vida.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 d-flex align-items-center">
                    <p class="lead text-justify pl-4 pr-4 text-white"> 
                    UNESCO reconoce al bullying como la principal causa de exclusion escolar y hace una llamada a que se intervenga en la temática. Ser LGBTI aumenta hasta 8 veces más el riesgo de ser víctima de bullying. ES URGENTE ACTUAR                    
                    </p>
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/salud.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row pb-3 justify-content-center">
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/chica.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/luz.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/chico.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row pb-3 justify-content-center">
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/naturaleza.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 d-flex align-items-center">
                    <p class="lead text-justify pl-4 pr-4 text-white"> 
                    UNESCO reconoce al bullying como la principal causa de exclusion escolar y hace una llamada a que se intervenga en la temática. Ser LGBTI aumenta hasta 8 veces más el riesgo de ser víctima de bullying. ES URGENTE ACTUAR                    
                    </p>
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/serenidad.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row pb-3 justify-content-center">
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/chicon.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/espiritu.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm-10 col-md-7 col-lg-4 col-xl-4 text-center">
                    <img src="<?php echo base_url();?>assets/img/chical.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>