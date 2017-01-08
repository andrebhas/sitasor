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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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