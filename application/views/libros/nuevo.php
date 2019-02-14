<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Nuevo Proyecto</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action="<?php echo base_url();?>Libros/guardar" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese un título">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción">
                </div>
                <div class="form-group">
                    <label for="precio">URL</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese una precio referente">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese clasificación general" value="LIBRO">
                </div>
                <div class="form-group">
                    <label for="imagen1">Imagen pequeña</label>
                    <input type="file" class="form-control-file" id="imagen1" name="imagen1">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/vendor/ckeditor_s/ckeditor.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js" type="text/javascript" charset="utf-8" ></script>
<script>
	$(document).ready(function(){
	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';
		CKEDITOR.replace('texto');
	});
</script>