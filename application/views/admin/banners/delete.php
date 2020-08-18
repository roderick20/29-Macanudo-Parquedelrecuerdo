<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Eliminar Banner</h6>
    </div>
    <div class="card-body">
        <?php
        $getFormRegister = array('id' => 'frmDelete', 'method' => 'post');
        echo form_open('/banners/do_delete', $getFormRegister);
        ?>
        <input type="hidden" name="DataId" value="<?php echo $data['DataId']; ?>">            
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Title" name="Title" readonly value="<?php echo$data['Title']; ?>" >
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>




