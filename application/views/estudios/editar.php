<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Actualizar Estudio</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action='<?php echo base_url();?>estudios/actualizar/<?php echo $estudio['id'];?>' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tema">Tema</label>
                    <input type="text" class="form-control" id="tema" name="tema" value='<?php echo $estudio['tema'];?>' placeholder="Ingrese un tema">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value='<?php echo $estudio['url'];?>' placeholder="Ingrese una url">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" value='<?php echo $estudio['fecha'];?>' placeholder="Ingrese una fecha">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
