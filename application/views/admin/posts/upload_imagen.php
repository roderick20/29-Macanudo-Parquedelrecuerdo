<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar Post-Imagent</h6>
    </div>
    <div class="card-body">
        <?php
        echo form_open('/posts/do_upload_imagen', ['id' => 'frmCreate', 'enctype' => 'multipart/form-data']);
        ?>

        <input type="hidden" name="UniqueId" value="<?php echo $UniqueId; ?>"> 
        <input type="hidden" name="Type" value="<?php echo $Type; ?>"> 

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Imagen 

                <?php
                if ($Type == 'p') {
                    echo "700x450";
                }
                if ($Type == 'g') {
                    echo "1160x580";
                }
                ?>


            </label>
            <div class="col-sm-10">
                <input type = "file" name = "file"  /> 
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Grabar</button>
            </div>
        </div>
        
         <?php
            if (isset($error)) {
                print_r($error);
            }
            ?>
        
        <?php
        echo form_close();
        ?>
    </div>
</div>

