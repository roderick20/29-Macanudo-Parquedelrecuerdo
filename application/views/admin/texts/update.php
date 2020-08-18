<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Texto</h6>
    </div>
    <div class="card-body">
        <?php
        echo form_open('/texts/do_update', array('id' => 'frmUpdate', 'method' => 'post'));
        ?>
        <input type="hidden" name="DataId" value="<?php echo $data['DataId']; ?>">            
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><?php echo $data['Title']; ?></label>
            <input type="hidden" name="DataId" value="<?php echo $data['DataId']; ?>">
            <div class="col-sm-12">
                <textarea type="text" class="form-control" id="Description" name="Description" required=""><?php echo $data['Description']; ?></textarea>
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Grabar</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>

