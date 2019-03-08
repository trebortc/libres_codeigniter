<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <div class="jumbotron" style="background:transparent !important">
                <h1 class="tam-letra-3 font-weight-bold">Herramientas Audiovisuales</h1><br>
                <p class="lead text-justify tam-letra-0">Los recursos audiovisuales suelen ser útiles para el trabajo didáctico con adolescentes y familias, brindando información y sensibilización, a continuación encontrará algunas de estas herramientas que se recomiendan sean usadas en el marco de una reflexión guiada con quienes manejen el tema. Recuerden además que pueden solicitar talleres de sensibilización al equipo responsable de esta página.</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class = "row justify-content-center">
        <?php
            foreach ($audiovisuales as $audiovisuales) 
            {
                echo "<div class='col-12 col-sm-10 col-md-5 col-lg-5 col-xl-5 pt-3 pr-5 pl-5'>".
                    "<div class='embed-responsive embed-responsive-16by9'>".
                        "<iframe class='embed-responsive-item' src='".$audiovisuales->url."' allowfullscreen></iframe>".
                    "</div>".
                "</div>";
            }
        ?>
    </div>
</div>