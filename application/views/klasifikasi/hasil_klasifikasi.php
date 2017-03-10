<?php 
    $ci =& get_instance();
?>
<?php echo $map['js']; ?>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>"></script>

<div class="content">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Hasil Klasifikasi</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td colspan="3">DEATIL</td>
                        <td>
                        <tr>
                            <td>Penginput</td> <td width="100px" align="center"> : </td><td><?php echo $penginput->username ?></td>
                        </tr>
                        <tr>
                            <td>Desa</td> <td width="100px" align="center"> : </td><td><?php echo $nama_desa ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td width="100px" align="center"> : </td><td><?php echo $tanggal ?></td>
                        </tr>
                    </table> 
                    <br>
                    <br>
                    <table class="table datatable-responsive table-sm table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>kemiringan Lereng</td>
                                <td><?= $kemiringan_lereng ?></td>
                            </tr>
                            <tr>
                                <td>kondisi tanah</td>
                                <td><?= $kondisi_tanah?></td>
                            </tr>
                            <tr>
                                <td>batuan penyusun lereng</td>
                                <td><?= $batuan_penyusun_lereng?></td>
                            </tr>
                            <tr>
                                <td>curah hujan</td>
                                <td><?= $curah_hujan?></td>
                            </tr>
                            <tr>
                                <td>tata air lereng</td>
                                <td><?= $tata_air_lereng ?></td>
                            </tr>
                            <tr>
                                <td>vegetasi</td>
                                <td><?= $vegetasi ?></td>
                            </tr>
                            <tr>
                                <td>pola tanam</td>
                                <td><?= $pola_tanam ?></td>
                            </tr>
                            <tr>
                                <td>penggalian dan pemotongan lereng</td>
                                <td><?= $penggalian_dan_pemotongan_lereng ?></td>
                            </tr>
                            <tr>
                                <td>pencetakan kolam</td>
                                <td><?= $pencetakan_kolam ?></td>
                            </tr>
                            <tr>
                                <td>drainase</td>
                                <td><?= $drainase ?></td>
                            </tr>
                            <tr>
                                <td>pembangunan konstruksi</td>
                                <td><?= $pembangunan_konstruksi ?></td>
                            </tr>
                            <tr>
                                <td>kepadatan penduduk</td>
                                <td><?= $kepadatan_penduduk ?></td>
                            </tr>
                            <tr>
                                <td>usaha mitigasi</td>
                                <td><?= $usaha_mitigasi ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">

                    <h4>Titik Rawan</h4>
                    <p>Latitude : <?php echo $lat ?></p>
                    <p>Longitude : <?php echo $lng ?></p>
                    <?php echo $map['html']; ?>
                    <h5>Keterangan</h5>
                    <p><?php echo $ket?></p>
                    <center><br><br><br>
                    <h4>Probabilitas Aman = <?= $prob_aman?></h4>
                    <h4>Probabilitas Rawan = <?= $prob_rawan?></h4>
                    <center><h1>Prediksi <?= $prediksi ?></h1>
                    <br><br>
                    <a class="btn btn-md btn-primary" href="<?= base_url('Klasifikasi')?>">Back</a>
                    <br>
                    <form action="<?php echo $action; ?>" method="post">
                        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
                        <input type="hidden" name="id_desa" value="<?php echo $id_desa; ?>" />
                        <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>" />

                        <input type="hidden" name="kemiringan_lereng" value="<?php echo $kemiringan_lereng; ?>" />
                        <input type="hidden" name="kondisi_tanah" value="<?php echo $kondisi_tanah; ?>" />
                        <input type="hidden" name="batuan_penyusun_lereng" value="<?php echo $batuan_penyusun_lereng; ?>" />
                        <input type="hidden" name="curah_hujan" value="<?php echo $curah_hujan; ?>" />
                        <input type="hidden" name="tata_air_lereng" value="<?php echo $tata_air_lereng; ?>" />
                        <input type="hidden" name="vegetasi" value="<?php echo $vegetasi; ?>" />
                        <input type="hidden" name="pola_tanam" value="<?php echo $pola_tanam; ?>" />
                        <input type="hidden" name="penggalian_dan_pemotongan_lereng" value="<?php echo $penggalian_dan_pemotongan_lereng; ?>" />
                        <input type="hidden" name="pencetakan_kolam" value="<?php echo $pencetakan_kolam; ?>" />
                        <input type="hidden" name="drainase" value="<?php echo $drainase; ?>" />
                        <input type="hidden" name="pembangunan_konstruksi" value="<?php echo $pembangunan_konstruksi; ?>" />
                        <input type="hidden" name="kepadatan_penduduk" value="<?php echo $kepadatan_penduduk; ?>" />
                        <input type="hidden" name="usaha_mitigasi" value="<?php echo $usaha_mitigasi; ?>" />
                        <input type="hidden" name="hasil" value="<?php echo $prediksi; ?>" />

                        <input type="hidden" name="latitude" value="<?php echo $lat; ?>" />
                        <input type="hidden" name="longitude" value="<?php echo $lng; ?>" />
                        <input type="hidden" name="keterangan" value="<?php echo $ket; ?>" />
                        <br>

                        <button class="btn btn-md btn-success" type="submit">Simpan</button>
                    </form>
                    </center>
                </div>            
        </div>

    </div>
</div>