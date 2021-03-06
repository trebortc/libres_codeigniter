<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <div class="jumbotron" style="background:transparent !important">
                <h1 class="tam-letra-3 font-weight-bold">Organizaciones de Apoyo</h1><br>
                <blockquote class="blockquote text-center">
                    <p class="mb-0 tam-letra-0"><em>&quot; En una sociedad que nos educa para la vergüenza, el orgullo es una respuesta política&quot;</em></p>
                    <footer class="blockquote-footer"><cite title="Source Title">Carlos Jáuregui</cite></footer>
                </blockquote>
                <hr class="my-4">
                <p class="lead text-justify tam-letra-0">Para algunas personas LGBTI, la experiencia en grupos de auto-apoyo entre pares puede ser más instructiva y valiosa que cualquier cosa que el acompañamiento psicológico podría ofrecer. Aunque ambas experiencias son potencialmente valiosas, el articularte a un grupo de apoyo podría serte de gran ayuda para gestionar las inquietudes o retos que enfrentas.</p>
                <hr class="my-4">
                <p class="lead text-justify tam-letra-0">La Red Ecuatoriana de Psicología por la Diversidad LGBTI - REPsiD respalda al momento grupos de apoyo para adolescentes diversxs y para familiares de personas LGBTI. Además puede ayudarte con asesoría para organizar un grupo de auto-apoyo en tu unidad educativa u organización comunitaria.</p>
                <br><a class="btn btn-danger font-weight-bold btn-lg float-right" href="https://itgetsbetter.org/get-help/" role="button" target=”_blank”>ORGANIZACIONES</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-10 col-lg-9 col-xl-9">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($organizaciones as $organizacion)
                        {
                            echo "<tr>".
                                "<td>".
                                    "<p class='tam-letra-0'>".$organizacion->descripcion."</p>".
                                "</td>".
                                "<td>".
                                    "<p class='tam-letra-0'><a href='".$organizacion->url."' target='_blank'>".$organizacion->url."</a></p>".
                                "</td>".
                            "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>