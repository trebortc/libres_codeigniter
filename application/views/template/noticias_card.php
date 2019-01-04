<div class="container-fluid color-1">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col d-flex align-items-center border-der">
                    <h1 class="display-1 font-weight-bold text-white">BLOG</h1>
                </div>
                <?php
                    foreach($noticias as $noticia)
                    {
                        echo "<div class='col'>".
                            "<div class='card borde-card-peq color-1'>".
                                "<div class='card-body'>".
                                    "<h5 class='card-title text-white'>LOREM IPSUM</h5>".
                                    "<p class='card-text text-white lead text-justify'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis </p>".
                                    "<a href='#' class='btn btn-danger float-right pl-4 pr-4 font-weight-bold'>LEER MÁS</a>".
                                "</div>".
                            "</div>".
                        "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>