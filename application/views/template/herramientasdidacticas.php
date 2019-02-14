<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <div class="jumbotron" style="background:transparent !important">
                <h1 class="tam-letra-3 font-weight-bold">Herramientas Didácticas</h1><br>
                <p class="lead text-justify tam-letra-0">A lo largo del mundo se han desarrollado guías, manuales e instructivos de trabajo con niños, niñas y adolescentes de diversidad sexo-genérica en entornos educativos, así como prevenir el bullying por orientación sexual y/o identidad de género. En estos documentos encontrarán recomendaciones prácticas.  Recuerden además que pueden solicitar talleres de sensibilización al equipo responsable de esta página.  </p>
                <hr class="my-4"><br>
                <h1 class="tam-letra-3 font-weight-bold text-center">Documentos PDF para educadores</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class='col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11'>
            <div class='row justify-content-center'>
                <?php
                    foreach ($proyectos as $proyecto) 
                    {               
                        echo "<div class='col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5'>".
                                    "<div class='card' style='width: 30rem'>". 
                                        "<img class='card-img-top' src='".base_url()."uploads/".$proyecto->imagen1."' alt='Imagen libro'>".
                                        "<div class='color-1 borde-ancho'></div>".
                                        "<div class='card-body'>".
                                            "<h1 class='card-title font-weight-bold tam-letra-3'>".$proyecto->titulo."</h1>".
                                            "<p class='card-text text-justify tam-letra-0'>".$proyecto->descripcion."...</p>".
                                            "<a href='".$proyecto->precio."' class='btn btn-dark float-right mr-4' target='_blank'>LEER MÁS</a>".
                                        "</div>".
                                    "</div>".
                            "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>