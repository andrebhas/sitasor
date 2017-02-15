<?php 
    $ci =& get_instance();;
?>

<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
                <div class="form-group">
                    <label for="int">Desa <?php echo form_error('id_desa') ?></label>
                    <select class="form-control" name="id_desa" id="id_desa" >
                        <option value="">Pilih .. </option>
                        <?php foreach ($data_desa as $d): ?>
                            <option value="<?php echo $d->id_desa ?>" <?php if($id_desa == $d->id_desa){echo 'selected';}  ?>> <?php echo $d->nama_desa ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="int">User <?php echo form_error('id_user') ?></label>
                    <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $user->id; ?>" />
                </div>
                <div class="form-group">
                    <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
                    <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo date("Y-m-d"); ?>" />
                </div>
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="varchar">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#111" >
                                        Pilih Kemiringan Lereng
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="111" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="111">Kemiringan Lereng</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Kemiringan lereng 36-40% <br>
                                                    <b>Sedang :</b> Kemiringan lereng 31-36% <br>
                                                    <b>Rendah :</b> Kemiringan lereng 21-30% <br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('kemiringan_lereng') ?>
                            </label>
                            <select class="form-control" name="kemiringan_lereng" id="kemiringan_lereng" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($kemiringan_lereng == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($kemiringan_lereng == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($kemiringan_lereng == 'Rendah'){echo 'selected';} ?>> Rendah </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#2" >
                                         Kondisi Tanah 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="2">Kondisi Tanah </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Kondisi tanah/batuan penyusun lereng umumnya merupakan lereng yang tersusun oleh tanah lempung yang mudah mengembang apabila jenuh air dan terdapat bidang kontras <br>
                                                    <b>Sedang :</b> Lereng tersusun oleh jenis tanah lempungyang mudah mengembang, tapi tidak ada bidang kontras dengan batuan di bawahnya <br>
                                                    <b>Rendah :</b> Lereng tersusun oleh jeniss tanah liat dan berpasir yang mudah, namun terdapat bidang kontras dengan batuan di bawahnya <br>

                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('kondisi_tanah') ?>
                            </label>
                            <select class="form-control" name="kondisi_tanah" id="kondisi_tanah" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($kondisi_tanah == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($kondisi_tanah == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($kondisi_tanah == 'Rendah'){echo 'selected';} ?>> Rendah </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#3" >
                                          Batuan Penyusun Lereng
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="3"> Batuan Penyusun Lereng </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Lereng yang tersusun oleh batuan dan terlihat banyak struktur retakan<br>
                                                    <b>Sedang :</b> Lereng tersusun oleh batuan dan terlihat ada struktur retakan, tetapi lapisan batuan tidak miring ke arah luar lereng<br>
                                                    <b>Rendah :</b> Lereng tersusun oleh batuan dan tanah namun ada struktur retakan/kekar pada batuan<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('batuan_penyusun_lereng') ?>
                                
                            </label>
                            <select class="form-control" name="batuan_penyusun_lereng" id="batuan_penyusun_lereng" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($batuan_penyusun_lereng == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($batuan_penyusun_lereng == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($batuan_penyusun_lereng == 'Rendah'){echo 'selected';} ?>> Rendah </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                             
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#4" >
                                          Curah Hujan
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="4">Curah Hujan</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> >2500 mm/th<br>
                                                    <b>Sedang :</b> 1000-2500 mm/th<br>
                                                    <b>Rendah :</b> <1000 mm/th <br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('curah_hujan') ?>
                                
                            </label>
                            <select class="form-control" name="curah_hujan" id="curah_hujan">
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($curah_hujan == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($curah_hujan == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($curah_hujan == 'Rendah'){echo 'selected';} ?>> Rendah </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#5" >
                                          Tata Air Lereng
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="5">Tata Air Lereng</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Sering muncul rembesan-rembesan air atau mata air pada lereng, terutama pada tingkat antara batuan kedap dengan lapisan tanah yang permeable<br>
                                                    <b>Sedang :</b> Jarang muncul rembesan-rembesan air atau mata air pada lereng atau bidang kontak antara batuan kedap dengan lapisan tanah yang permeable<br>
                                                    <b>Rendah :</b> Tidak terdapat rembesan-rembesan air atau mata air pada lereng atau bidang kontak antara batuan kedap dengan lapisan tanah yang permeable<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('tata_air_lereng') ?>
                            </label>
                            <select class="form-control" name="tata_air_lereng" id="tata_air_lereng" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($tata_air_lereng == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($tata_air_lereng == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($tata_air_lereng == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#6" >
                                          Vegetasi 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="6">Vegetasi </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Alang-alang, rumput-rumputa, tumbuhan semak, tumbuhan perdu<br>
                                                    <b>Sedang :</b> Tumbuhan berdaun jarum seperti pinus<br>
                                                    <b>Rendah :</b> Tumbuhan berakar tunjang yang perakarannya menyebar seperti jati, kemiri, kosambi, laban, dilingsem, mindi, johar, bangur, banyan, mahoni, ranghas, sono keling, trengguli, tayuman, asam jawa dan pilang<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('vegetasi') ?></label>
                             <select class="form-control" name="vegetasi" id="vegetasi" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($vegetasi == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($vegetasi == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($vegetasi == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#7" >
                                          Pola Tanam 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="7">Pola Tanam </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Lereng ditanami dengan pola tanam yang tidak tepat dan sangat sensitif<br>
                                                    <b>Sedang :</b> Lereng ditanami dengan pola tanah yang tepat dan sangat intensif<br>
                                                    <b>Rendah :</b> Lereng ditanami dengan pola tanaman yang tepat dan serta tidak intensif<br>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                            <?php echo form_error('pola_tanam') ?>
                                
                            </label>
                            <select class="form-control" name="pola_tanam" id="pola_tanam" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($pola_tanam == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($pola_tanam == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($pola_tanam == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#8" >
                                          Penggalian Dan Pemotongan Lereng
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="8">Penggalian Dan Pemotongan Lereng</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Intensitas penggalian/pemotongan lereng tinggi tanpa memperhatikan struktur perlapisan tanah/batuan pada lereng dan tanpa perhitungan analisis kestabilan lereng<br>
                                                    <b>Sedang :</b> Intensitas penggalian/pemotongan lereng rendah, serta memperhatikan srtuktur perlapisan tanah/batuan pada lereng dan perhitungan analisis kestabilan lereng<br>
                                                    <b>Rendah :</b> Tidak melakukan penggalian/pemotongan lereng<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                              
                                    <?php echo form_error('penggalian_dan_pemotongan_lereng') ?></label>
                            <select class="form-control" name="penggalian_dan_pemotongan_lereng" id="penggalian_dan_pemotongan_lereng" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($penggalian_dan_pemotongan_lereng == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($penggalian_dan_pemotongan_lereng == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($penggalian_dan_pemotongan_lereng == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#9" >
                                          Pencetakan Kolam 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="9">Pencetakan Kolam </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Dilakukan pencetakan kolam yang dapat mengakibatkan merembesnya air kolam ke lereng<br>
                                                    <b>Sedang :</b> Dilakuan pencetakan kolam tetapi terdapat perembesan air kolam ke dalam lereng<br>
                                                    <b>Rendah :</b> Tidak melakukan pencetakan kolam<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('pencetakan_kolam') ?>
                                
                            </label>
                            <select class="form-control" name="pencetakan_kolam" id="pencetakan_kolam" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($pencetakan_kolam == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($pencetakan_kolam == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($pencetakan_kolam == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#10" >
                                          Drainase 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="10">Drainase </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Sistem drainase tidak memadai, tidak ada usaha-usaha untuk memperbaiki<br>
                                                    <b>Sedang :</b> Sistem drainase agak memadai, ada usaha-usaha untuk memperbaiki drainase<br>
                                                    <b>Rendah :</b> Sistem drainase memadai, ada usaha-usaha untuk memelihara saluran drainase<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('drainase') ?></label>
                            <select class="form-control" name="drainase" id="drainase" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($drainase == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($drainase == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($drainase == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#11" >
                                          Pembangunan Konstruksi 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="11">Pembangunan Konstruksi </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Dilakukan pembangunan konstruksi dan beban yang terlalu besar dan melampaui daya dukung (bangunan lebih dari 2 lantai dengan konstruksi beton pada tanah jenis lempung).<br>
                                                    <b>Sedang :</b> Dilakukan pembangunan konstruksi dan beban yang masih sedikit, tetapi belum melampaui daya dukung (bangunan 1 lantai pada tanah lempung)<br>
                                                    <b>Rendah :</b> Dilakukan pembangunan konstruksi dan beban yang masih sedikit, dan belum melampaui daya dukung tanah, atau tidak ada pembangunan konstruksi<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('pembangunan_konstruksi') ?></label>
                            <select class="form-control" name="pembangunan_konstruksi" id="pembangunan_konstruksi" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($pembangunan_konstruksi == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($pembangunan_konstruksi == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($pembangunan_konstruksi == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#12" >
                                          Kepadatan Penduduk 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="12">Kepadatan Penduduk </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> >50 jiwa/ha<br>
                                                    <b>Sedang :</b> 20-50 jiwa/ha<br>
                                                    <b>Rendah :</b> <20 jiwa/ha<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('kepadatan_penduduk') ?></label>
                            <select class="form-control" name="kepadatan_penduduk" id="kepadatan_penduduk" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($kepadatan_penduduk == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($kepadatan_penduduk == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($kepadatan_penduduk == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#13" >
                                          Usaha Mitigasi  
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="13">Usaha Mitigasi  </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Tinggi :</b> Tidak ada usaha mitigasi bencana<br>
                                                    <b>Sedang :</b> Terdapat usaha mitigasi bencana tapi belum terkoordinasi dan melembaga<br>
                                                    <b>Rendah :</b> Terdapat usaha mitigasi bencana yang sudah terorganisir dan terkoordinasi dengan baik<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('usaha_mitigasi') ?></label>
                             <select class="form-control" name="usaha_mitigasi" id="usaha_mitigasi" >
                                <option value ="" > ... </option>
                                <option value="Tinggi" <?php if($usaha_mitigasi == 'Tinggi'){echo 'selected';} ?>> Tinggi </option>
                                <option value="Sedang" <?php if($usaha_mitigasi == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Rendah" <?php if($usaha_mitigasi == 'Rendah'){echo 'selected';} ?>> Rendah </option>
                            </select>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="id_data_tes" value="<?php echo $id_data_tes; ?>" />
                <br><br>
                <center>
                    <button type="submit" class="btn btn-success btn-large"><?php echo $button ?></button> 
                </center> 
               
            </form>
        
        </div>
    </div>
</div>