<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Modificar Banner</h6>
    </div>
    <div class="card-body">

            
                        <?php 
                                        $getFormRegister = array('id' => 'frm', 'method' => 'post');
                                        echo form_open('/banners/do_update', $getFormRegister); ?>
            
             <input type="hidden" name="BannerID" value="<?php echo $banner->BannerID; ?>">
            
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" name="Name" required="" value="<?php echo $banner->Name; ?>">
                </div>
            </div>
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input type = "file" name = "file"  required=""/> 
                    <br>
                     <img src="/uploads/<?php echo $banner->Url; ?>" />
                </div>
            </div>
            
            <?php
            if (isset($upload_data)) {
                print_r($upload_data);
            }
            ?>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </div>
            </div>
     <?php echo form_close(); ?>
    </div>
</div>

