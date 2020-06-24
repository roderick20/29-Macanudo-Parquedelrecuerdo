<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Modificar Galeria</h6>
    </div>
    <div class="card-body">
        <form action="/index.php/galleries/do_update" method="POST">
            
             <input type="hidden" name="GalleryID" value="<?php echo $gallery->GalleryID; ?>">
            
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" name="Name" required="" value="<?php echo $gallery->Name; ?>">
                </div>
            </div>
             

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </div>
            </div>
        </form>
    </div>
</div>
