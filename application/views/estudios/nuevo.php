<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Nuevo Estudio</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action="<?php echo base_url();?>estudios/guardar" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tema">Tema</label>
                    <input type="text" class="form-control" id="tema" name="tema" placeholder="Ingrese um tema">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese um url">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingrese una fecha">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
