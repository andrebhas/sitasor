<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    </head>
    <body>
	   <br><hr>
       <center><h1 class="panel-title">Rekap Histori</h1></center>
	   <hr><br>
       <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th width="50px">No</th>
						<th>Desa</th>
						<th>Pengintput</th>
						<th>Tanggal</th>
                        <th>Titik Rawan</th>
                        <th>keterangan titik Rawan</th>
						<th>Kemiringan Lereng</th>
						<th>Kondisi Tanah</th>
						<th>Batuan Penyusun Lereng</th>
						<th>Curah Hujan</th>
						<th>Tata Air Lereng</th>
						<th>Vegetasi</th>
						<th>Pola Tanam</th>
						<th>Penggalian Dan Pemotongan Lereng</th>
						<th>Pencetakan Kolam</th>
						<th>Drainase</th>
						<th>Pembangunan Konstruksi</th>
						<th>Kepadatan Penduduk</th>
						<th>Usaha Mitigasi</th>
						<th>Hasil</th>
                    </tr>
                </thead>
				<tbody>
            <?php
                $start = 0;
                foreach ($dashboard_data as $data_tes1)
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
                        <td><?php echo $this->Desa_model->get_by_id($data_tes1->id_desa)->nama_desa ?></td>
                        <td><?php echo $this->Users_model->get_by_id($data_tes1->id_user)->username ?></td>
						<td><?php echo $data_tes1->tanggal ?></td>
                        <td><?php echo $data_tes1->latitude.' , '.$data_tes1->longitude ?></td>
                        <td><?php echo $data_tes1->keterangan?></td>
						<td><?php echo $data_tes1->kemiringan_lereng ?></td>
						<td><?php echo $data_tes1->kondisi_tanah ?></td>
						<td><?php echo $data_tes1->batuan_penyusun_lereng ?></td>
						<td><?php echo $data_tes1->curah_hujan ?></td>
						<td><?php echo $data_tes1->tata_air_lereng ?></td>
						<td><?php echo $data_tes1->vegetasi ?></td>
						<td><?php echo $data_tes1->pola_tanam ?></td>
						<td><?php echo $data_tes1->penggalian_dan_pemotongan_lereng ?></td>
						<td><?php echo $data_tes1->pencetakan_kolam ?></td>
						<td><?php echo $data_tes1->drainase ?></td>
						<td><?php echo $data_tes1->pembangunan_konstruksi ?></td>
						<td><?php echo $data_tes1->kepadatan_penduduk ?></td>
						<td><?php echo $data_tes1->usaha_mitigasi ?></td>
						<td><?php echo $data_tes1->hasil ?></td>
						
					</tr>
            <?php
                }
            ?>
                </tbody>
            </table>
    </body>
</html>