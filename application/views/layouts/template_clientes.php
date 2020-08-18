<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Clientes</title>

    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><img src="/wp-content/uploads/2020/02/logo_44x44.png" /></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="<?php echo base_url(); ?>clientes/datos_personales">Mis Datos</a>
    <a class="p-2 text-dark" href="<?php echo base_url(); ?>clientes/contratos">Mis Contratos</a>
    <a class="p-2 text-dark" href="<?php echo base_url(); ?>clientes/estipedios_contrato">Mis Estipendios</a>
    <a class="p-2 text-dark" href="<?php echo base_url(); ?>clientes/confirmar_abono">Abono el linea</a>
  </nav>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user"></i> Juan Perez
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Cambio contraseña</a>
    <a class="dropdown-item" href="#">Salir</a>
  </div>
</div>
<!--  <a class="btn btn-primary" href="#"><i class="fas fa-user"></i> Juan Perez</a>-->
</div>



<div class="container">
  <?php echo $contents ?>
   
    
   
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">

      </div>

    </div>
  </footer>

</div>
<script src="<?php echo base_url(); ?>assets/theme_admin/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


                        

                    