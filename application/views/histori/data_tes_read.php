<?php 
    $ci =& get_instance();
?>

<div class="content">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5 class="panel-title">Data_tes Detail</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
        
            <table class="table">
				<tr>
                    <td>Id Desa</td><td><?php echo $id_desa; ?></td>
                </tr>
				<tr>
                    <td>Id User</td><td><?php echo $id_user; ?></td>
                </tr>
				<tr>
                    <td>Tanggal</td><td><?php echo $tanggal; ?></td>
                </tr>
				<tr>
                    <td>Kemiringan Lereng</td><td><?php echo $kemiringan_lereng; ?></td>
                </tr>
				<tr>
                    <td>Kondisi Tanah</td><td><?php echo $kondisi_tanah; ?></td>
                </tr>
				<tr>
                    <td>Batuan Penyusun Lereng</td><td><?php echo $batuan_penyusun_lereng; ?></td>
                </tr>
				<tr>
                    <td>Curah Hujan</td><td><?php echo $curah_hujan; ?></td>
                </tr>
				<tr>
                    <td>Tata Air Lereng</td><td><?php echo $tata_air_lereng; ?></td>
                </tr>
				<tr>
                    <td>Vegetasi</td><td><?php echo $vegetasi; ?></td>
                </tr>
				<tr>
                    <td>Pola Tanam</td><td><?php echo $pola_tanam; ?></td>
                </tr>
				<tr>
                    <td>Penggalian Dan Pemotongan Lereng</td><td><?php echo $penggalian_dan_pemotongan_lereng; ?></td>
                </tr>
				<tr>
                    <td>Pencetakan Kolam</td><td><?php echo $pencetakan_kolam; ?></td>
                </tr>
				<tr>
                    <td>Drainase</td><td><?php echo $drainase; ?></td>
                </tr>
				<tr>
                    <td>Pembangunan Konstruksi</td><td><?php echo $pembangunan_konstruksi; ?></td>
                </tr>
				<tr>
                    <td>Kepadatan Penduduk</td><td><?php echo $kepadatan_penduduk; ?></td>
                </tr>
				<tr>
                    <td>Usaha Mitigasi</td><td><?php echo $usaha_mitigasi; ?></td>
                </tr>
				<tr>
                    <td>Hasil</td><td><?php echo $hasil; ?></td>
                </tr>
				<tr>
                    <td><a href="<?php echo site_url('data_tes') ?>" class="btn btn-primary">Back</a></td><td></td>
                </tr>
			</table>
       
       </div>

    </div>
</div>