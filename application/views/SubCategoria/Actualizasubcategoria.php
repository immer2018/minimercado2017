<div class="container">
    <section class="content">
        <div style="height: 5vh"></div>

        <div class="flex-center">
            <div style="height: 5vh"></div>
            <?php if ($this->session->flashdata('correcto')): ?>
                <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  
        <?php endif; ?>
        <?php if ($this->session->flashdata('incorrecto')): ?>
            <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
<?php endif; ?>
</div>
<?php echo form_open('Subcategoria/actualizarsub/' . $idSub); ?>  
<input type="hidden" name="hdcodigoCategoria" value="<?= $codCategoria ?>">

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-7 col-md-7">
     <div class="box">
        <div class="box-header">
            <h3 class="box-title box-success"><span class="resaltar"><i class="fa fa-eye"></i> Actualizar SubCategorìa</span></h3>
        </div> 
        <div class="box-body">
          
                <div class="input-group">
<<<<<<< HEAD
                    <span class="input-group-addon text-gray1"> <i class="fa fa-folder-o "></i> Subcategoria  </span>  
=======
                    <span class="input-group-addon text-gray"> <i class="fa fa-folder-o "></i> Subcategoria  </span>  
>>>>>>> immer
                    <input type="text" id="form1" class="form-control" name="NombreSubcategoria" value="<?php echo $NombreSub; ?>">
                </div>
                <div style="height: 3vh"></div>
                <div class="input-group">
<<<<<<< HEAD
                    <span class="input-group-addon text-gray1"> <i class="fa fa-pencil-square-o"></i> Detalle de Subcategoria </span> 
=======
                    <span class="input-group-addon text-gray"> <i class="fa fa-pencil-square-o"></i> Detalle de Subcategoria </span> 
>>>>>>> immer
                    <textarea rows="2" class="form-control"  name="detalSubCategoria"><?php echo $DetallesSub; ?></textarea> 

                </div>

           
        </div>
        <div class="box-footer">
<<<<<<< HEAD
            <div class="input-group">
                <button   type="submit" class="btn bg-orange " name="btnEditaSubcategoria"  style="margin-left: 200px;"><i class='fa fa-edit'> Actualizar Subcategoria</i></button>
=======
            <div >
                <button type="submit" class="btn bg-orange pull-right" name="btnEditaSubcategoria"><i class='fa fa-edit'> Actualizar Subcategoria</i></button>
>>>>>>> immer
            </div>
        </div>

    </div>    
    </div>
   

</div>
<div style="height: 5vh"></div>
<?php echo form_close(); ?>
<div class="col-9 ">
    <span class="alert-danger close"><?php echo validation_errors(); ?></span> 
</div>
</section>
</div>
