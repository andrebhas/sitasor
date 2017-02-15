<?php 
    $ci =& get_instance();;
?>

<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?> Desa</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
                    <label for="varchar">Nama Desa <?php echo form_error('nama_desa') ?></label>
                    <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Nama Desa" value="<?php echo $nama_desa; ?>" />
                </div>
				<input type="hidden" name="id_desa" value="<?php echo $id_desa; ?>" /> 
				<button type="submit" class="btn btn-success"><?php echo $button ?></button> 
				<a href="<?php echo site_url('desa') ?>" class="btn btn-default">Cancel</a>
			</form>
        
        </div>
    </div>
</div>