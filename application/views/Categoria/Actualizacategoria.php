
<div style="height: 8vh"></div>
<section class="content">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-xs-7">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title box-success"><span class="resaltar"><i class="fa fa-eye"></i> Actualizar Categorìa</span></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php echo form_open('CategoriaController/CategoriaActualizada/' . $id); ?>
                    <div style="height: 1vh"></div>
                  
                    <div class="flex-center">
                        <div style="height: 1vh"></div>
                        <?php if ($this->session->flashdata('correcto')): ?>
                            <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('incorrecto')): ?>
                        <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
                <?php endif; ?>
            </div>
            <div class="col-8 col-md-8">
                <div class="input-group">
<<<<<<< HEAD
                    <span class="input-group-addon text-gray1"> <i class="fa fa-suitcase " aria-hidden="true" ></i> Categoría</span>
=======
                    <span class="input-group-addon text-gray"> <i class="fa fa-suitcase " aria-hidden="true" ></i> Categoría</span>
>>>>>>> immer
               
                    <input type="text" id="form1" class="form-control" name="NombreCategoria" required="required" value="<?= $Nombre ?>">
                </div>
                <div style="height: 1vh"></div>
                <div class="input-group">
<<<<<<< HEAD
                    <span class="input-group-addon text-gray1"> <i class="fa fa-pencil  " aria-hidden="true" ></i> Detalle de Categoría</span>
=======
                    <span class="input-group-addon text-gray"> <i class="fa fa-pencil  " aria-hidden="true" ></i> Detalle de Categoría</span>
>>>>>>> immer
                  
                    <textarea id="detallecat" rows="4"  class="form-control" name="txtdetalle" required="required"><?= $Detalles ?></textarea>
                    
                </div>
            </div>
            
        </div>
                <div class="box-footer">
<<<<<<< HEAD
                    <div class="btn-group m-2">
                        <button type="submit" class="btn bg-orange " name="btnActCategoria" style="margin-left: 200px;"> <i class='fa fa fa-edit'> </i>Actualizar Categorìa</button>
=======
                    <div>
                        <button type="submit" class="btn bg-orange pull-right " name="btnActCategoria" > <i class='fa fa fa-edit'> </i>Actualizar Categorìa</button>
>>>>>>> immer
                    </div>
                </div>
    </div>
    <?php echo form_close(); ?>
    <div class="col-9 ">
        <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
    </div>
</section>

