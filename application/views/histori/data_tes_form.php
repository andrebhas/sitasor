<?php 
    $ci =& get_instance();;
?>

<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?> Data_tes</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
                    <label for="int">Id Desa <?php echo form_error('id_desa') ?></label>
                    <input type="text" class="form-control" name="id_desa" id="id_desa" placeholder="Id Desa" value="<?php echo $id_desa; ?>" />
                </div>
				<div class="form-group">
                    <label for="int">Id User <?php echo form_error('id_user') ?></label>
                    <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                </div>
				<div class="form-group">
                    <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
                    <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Kemiringan Lereng <?php echo form_error('kemiringan_lereng') ?></label>
                    <input type="text" class="form-control" name="kemiringan_lereng" id="kemiringan_lereng" placeholder="Kemiringan Lereng" value="<?php echo $kemiringan_lereng; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Kondisi Tanah <?php echo form_error('kondisi_tanah') ?></label>
                    <input type="text" class="form-control" name="kondisi_tanah" id="kondisi_tanah" placeholder="Kondisi Tanah" value="<?php echo $kondisi_tanah; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Batuan Penyusun Lereng <?php echo form_error('batuan_penyusun_lereng') ?></label>
                    <input type="text" class="form-control" name="batuan_penyusun_lereng" id="batuan_penyusun_lereng" placeholder="Batuan Penyusun Lereng" value="<?php echo $batuan_penyusun_lereng; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Curah Hujan <?php echo form_error('curah_hujan') ?></label>
                    <input type="text" class="form-control" name="curah_hujan" id="curah_hujan" placeholder="Curah Hujan" value="<?php echo $curah_hujan; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Tata Air Lereng <?php echo form_error('tata_air_lereng') ?></label>
                    <input type="text" class="form-control" name="tata_air_lereng" id="tata_air_lereng" placeholder="Tata Air Lereng" value="<?php echo $tata_air_lereng; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Vegetasi <?php echo form_error('vegetasi') ?></label>
                    <input type="text" class="form-control" name="vegetasi" id="vegetasi" placeholder="Vegetasi" value="<?php echo $vegetasi; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Pola Tanam <?php echo form_error('pola_tanam') ?></label>
                    <input type="text" class="form-control" name="pola_tanam" id="pola_tanam" placeholder="Pola Tanam" value="<?php echo $pola_tanam; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Penggalian Dan Pemotongan Lereng <?php echo form_error('penggalian_dan_pemotongan_lereng') ?></label>
                    <input type="text" class="form-control" name="penggalian_dan_pemotongan_lereng" id="penggalian_dan_pemotongan_lereng" placeholder="Penggalian Dan Pemotongan Lereng" value="<?php echo $penggalian_dan_pemotongan_lereng; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Pencetakan Kolam <?php echo form_error('pencetakan_kolam') ?></label>
                    <input type="text" class="form-control" name="pencetakan_kolam" id="pencetakan_kolam" placeholder="Pencetakan Kolam" value="<?php echo $pencetakan_kolam; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Drainase <?php echo form_error('drainase') ?></label>
                    <input type="text" class="form-control" name="drainase" id="drainase" placeholder="Drainase" value="<?php echo $drainase; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Pembangunan Konstruksi <?php echo form_error('pembangunan_konstruksi') ?></label>
                    <input type="text" class="form-control" name="pembangunan_konstruksi" id="pembangunan_konstruksi" placeholder="Pembangunan Konstruksi" value="<?php echo $pembangunan_konstruksi; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Kepadatan Penduduk <?php echo form_error('kepadatan_penduduk') ?></label>
                    <input type="text" class="form-control" name="kepadatan_penduduk" id="kepadatan_penduduk" placeholder="Kepadatan Penduduk" value="<?php echo $kepadatan_penduduk; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Usaha Mitigasi <?php echo form_error('usaha_mitigasi') ?></label>
                    <input type="text" class="form-control" name="usaha_mitigasi" id="usaha_mitigasi" placeholder="Usaha Mitigasi" value="<?php echo $usaha_mitigasi; ?>" />
                </div>
				<div class="form-group">
                    <label for="varchar">Hasil <?php echo form_error('hasil') ?></label>
                    <input type="text" class="form-control" name="hasil" id="hasil" placeholder="Hasil" value="<?php echo $hasil; ?>" />
                </div>
				<input type="hidden" name="id_data_tes" value="<?php echo $id_data_tes; ?>" /> 
				<button type="submit" class="btn btn-success"><?php echo $button ?></button> 
				<a href="<?php echo site_url('data_tes') ?>" class="btn btn-default">Cancel</a>
			</form>
        
        </div>
    </div>
</div>