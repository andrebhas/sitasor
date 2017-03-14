<?php 
    $ci =& get_instance();
?>

<div class="content">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5 class="panel-title">Detail Desa <?php echo $nama_desa; ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#2" >
                                         Tambah Dusun 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="2">Form Tambah Dusun</h4>
                                                </div>

                                            <form action="<?php echo base_url('desa/tambah_dusun')?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="varchar">Nama Dusun</label>
                                                        <input required type="text" class="form-control" name="dusun" id="dusun" placeholder="Nama Dusun"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varchar">Luas Daerah (Ha)</label>
                                                        <input required type="text" class="form-control" name="luas_daerah" id="luas_daerah"/>
                                                    </div>
                                                    <input type="hidden" name="id_desa" value="<?php echo $id_desa;?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>

                                            </div>
                                        </div>
                                    </div>
            
            
            <br><br><br>
            <table class="table datatable-responsive table-sm table-striped" id="mytable">
                <thead>
                    <tr>
                        <th width="50px">No</th>
						<th>Nama Dusun</th>
						<th>Luas Daerah</th>
                        <th>Action</th>
                    </tr>
                </thead>
				<tbody>
            <?php
                $start = 0;
                foreach ($dusun as $dsn)
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
						<td><?php echo $dsn->dusun ?></td>
                        <td><?php echo $dsn->luas_daerah ?></td>
						<td style="text-align:center" width="200px">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal" data-iddesa="<?php echo $dsn->id_desa_detail?>" data-dusun="<?php echo $dsn->dusun ?>" data-luasdaerah="<?php echo $dsn->luas_daerah?>" >Update</button>
						<?php  
							//echo anchor(site_url('desa/update/'.$dsn->id_desa_detail),'Update'); 
							//echo ' | '; 
							echo anchor(site_url('desa/delete_dusun/'.$dsn->id_desa_detail),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
						?>
						</td>
					</tr>
            <?php
                }
            ?>
                </tbody>
            </table>


            <br>
       <a href="<?php echo site_url('desa') ?>" class="btn btn-primary">Back</a>
       </div>

    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h4 class="modal-title" id="exampleModalLabel">Form Update Dusun </h4>
      </div>
      <div class="modal-body">
        <form action="<?echo base_url('desa/update_dusun')?>" method="POST">
          <div class="form-group">
            <label for="dusun" class="control-label">Nama Dusun</label>
            <input type="text" name="dusun_up" class="form-control" id="dusun_update">
          </div>
          <div class="form-group">
            <label for="luas_daerah" class="control-label">Luas daerah</label>
            <input type="text" name="luas_daerah_up" class="form-control" id="luas_daerah_update">
          </div>
          <input type="hidden" name="id_desa_detail_up" id="id_desa_detail_up">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>







<script type="text/javascript">

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) ;
  var id_desa = button.data('iddesa') ;
  var dusun = button.data('dusun') ;
  var luas_daerah = button.data('luasdaerah') ;
  var modal = $(this);
  $('#dusun_update').val(dusun);
  $('#luas_daerah_update').val(luas_daerah);
  $('#id_desa_detail_up').val(id_desa);
})


$(function() {
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 2 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
        language: {
            search: '<span>Cari :</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'Cari' : 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });


    // Basic responsive configuration
    $('.datatable-responsive').DataTable();


    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Ketik ...');
    
});
</script>