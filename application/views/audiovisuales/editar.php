<div class="container-fluid pt-0 pb-5 pr-5 pl-5">
    <div class="row">
        <div class="col">
            <h3>Actualizar Audiovisual</h3>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <form method="post" action='<?php echo base_url();?>audiovisuales/actualizar/<?php echo $audiovisuales['id'];?>' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value='<?php echo $audiovisuales['url'];?>' placeholder="Ingrese un Url">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
