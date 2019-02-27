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
                    echo "<a href='".base_url()."Libros/nuevo' class='btn btn-info' role='button'>Nuevo</a>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <h1><span class='badge badge-dark'>Libros</span></h1>
            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">URL</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n=1;
                            foreach ($proyectos as $proyecto)
                            
                            {
                                echo "<tr>".
                                "<th scope='row'>".$n++."</th>".
                                "<td>".$proyecto->titulo."</td>".
                                "<td>".$proyecto->descripcion."</td>".
                                "<td>".$proyecto->precio."</td>".
                                "<td>".$proyecto->tipo."</td>".
                                "<td>";
                                    if(isset ($_SESSION ['usuario' ])){ 
                                        echo "<a href='".base_url()."Libros/editar/".$proyecto->id."'>Editar</a>";
                                        echo "<a href='".base_url()."Libros/eliminar/".$proyecto->id."'>Eliminar</a>";
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


