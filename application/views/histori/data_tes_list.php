<?php 
    $ci =& get_instance();
?>

<script src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>"></script>

<div class="content">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Rekapan Histori Data Desa Terakhir</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
            <div class="row">
                <div class="col-md-7 text-center">
                    <div style="margin-top: 4px"  id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
            </div>          
            <br>
            <table class="table datatable-responsive table-sm table-striped" id="mytable">
                <thead>
                    <tr>
                        <th width="50px">No</th>
						<th>Desa</th>
						<th>Pengintput</th>
						<th>Tanggal</th>
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
						<th>Action</th>
                    </tr>
                </thead>
				<tbody>
            <?php
                $start = 0;
                foreach ($data_tes_data as $data_tes)
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
                        <td><?php echo $this->Desa_model->get_by_id($data_tes->id_desa)->nama_desa ?></td>
                        <td><?php echo $this->Users_model->get_by_id($data_tes->id_user)->username ?></td>
						<td><?php echo $data_tes->tanggal ?></td>
						<td><?php echo $data_tes->kemiringan_lereng ?></td>
						<td><?php echo $data_tes->kondisi_tanah ?></td>
						<td><?php echo $data_tes->batuan_penyusun_lereng ?></td>
						<td><?php echo $data_tes->curah_hujan ?></td>
						<td><?php echo $data_tes->tata_air_lereng ?></td>
						<td><?php echo $data_tes->vegetasi ?></td>
						<td><?php echo $data_tes->pola_tanam ?></td>
						<td><?php echo $data_tes->penggalian_dan_pemotongan_lereng ?></td>
						<td><?php echo $data_tes->pencetakan_kolam ?></td>
						<td><?php echo $data_tes->drainase ?></td>
						<td><?php echo $data_tes->pembangunan_konstruksi ?></td>
						<td><?php echo $data_tes->kepadatan_penduduk ?></td>
						<td><?php echo $data_tes->usaha_mitigasi ?></td>
						<td><?php echo $data_tes->hasil ?></td>
						<td style="text-align:center" width="200px">
						<?php 
                            if($this->ion_auth->is_admin()){
                        ?>
                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#approve" data-id="<?= $data_tes->id_data_tes?>" data-desa="<?= $this->Desa_model->get_by_id($data_tes->id_desa)->nama_desa ?>" data-tanggal="<?= $data_tes->tanggal ?>" data-hasil="<?= $data_tes->hasil ?>">Approve</button>
                        <?php
                            } else {
							echo anchor(site_url('data_tes/delete/'.$data_tes->id_data_tes),'Delete','class="btn btn-primary btn-xs" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                            }
                        ?>
						</td>
					</tr>
            <?php
                }
            ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Approve dan Simpan Ke Data Set</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('data_tes/approve')?>">
          <input type="hidden" class="form-control" id="id" name="id">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Desa</label>
            <input type="text" disabled class="form-control" id="nama_desa">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Tanggal</label>
            <input type="text" disabled class="form-control" id="tanggal">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Hasil Klasifikasi</label>
            <select name="hasil" id="hasil" class="form-control">
                <option value="Aman">Aman</option>
                <option value="Rawan">Rawan</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$('#approve').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
  var desa = button.data('desa') 
  var tanggal = button.data('tanggal') 
  var hasil = button.data('hasil') 
  var modal = $(this)
  $('#id').val(id)
  $('#nama_desa').val(desa)
  $('#tanggal').val(tanggal)
  if(hasil == 'Aman'){
    var index = "0"
  } else {
    var index = "1"
  }
  document.getElementById("hasil").selectedIndex = index;
})

$(function() {

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 5 ]
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


    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: "-1"
    });
    
});
</script>