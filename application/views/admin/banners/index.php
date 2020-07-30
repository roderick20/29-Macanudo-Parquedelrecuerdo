<div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-image"></i> Banners</h6>
        <div class="dropdown no-arrow">
            <a href="/banners/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="card-body">       
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th></th>
                    </tr>
                </thead>                
                <tbody>
                    <?php foreach ($list as $item) { ?>
                        <tr>
                            <td><?php echo utf8_decode($item['Title']); ?></td> 
                            <td>
                                <img src="/uploads/banner/<?php echo $item['Imagen_g']; ?>" class="img-fluid" width="500px"/>
                                </td> 
                            <td>
                                <!--<a href="/banners/update?id=<?php echo $item['DataId']; ?>"><i class="far fa-edit"></i> Editar</a> |--> 
                                <a href="/banners/delete?id=<?php echo $item['DataId']; ?>"><i class="far fa-trash-alt"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


