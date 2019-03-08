<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>MENSAJE: </strong> <?=$mensaje;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="row text-right">
        <div class="col-11">
            <?php
                if(isset ($_SESSION ['usuario' ])){
                    echo "<a href='".base_url()."organizaciones/nuevo' class='btn btn-info' role='button'>Nuevo</a>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <h1><span class='badge badge-dark'>ORGANIZACIONES</span></h1>
            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Url</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n=1;
                            foreach ($organizaciones as $organizacion)
                            {
                                echo "<tr>".
                                "<th scope='row'>".$n++."</th>".
                                "<td>".$organizacion->descripcion."</td>".
                                "<td>".$organizacion->url."</td>".
                                "<td>";
                                if(isset ($_SESSION ['usuario' ])){ 
                                    echo "<a href='".base_url()."organizaciones/editar/".$organizacion->id."'>Editar</a>";
                                    echo "<a href='".base_url()."organizaciones/eliminar/".$organizacion->id."'>Eliminar</a>";
                                }    
                                echo "</td>".
                                "</tr>";    
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


