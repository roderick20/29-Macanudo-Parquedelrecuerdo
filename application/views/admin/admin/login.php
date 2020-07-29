<?php 
print_r($message);
?>

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">

        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-6 ">
                <div class="p-5">
                    <div class="text-center">
                        <img src="/assets/theme_admin/img/logo.png" />
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <?php 
                    $getFormRegister = array('id' => 'frmUserCreate');
                    echo form_open('/admin/do_login', $getFormRegister); 
                    ?>
                    
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="Email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="Password" placeholder="Contraseña">
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>
                        
                      <?php
        echo form_close();
        ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>

