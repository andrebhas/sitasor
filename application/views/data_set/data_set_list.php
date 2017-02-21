<?php 
    $ci =& get_instance();
?>

<script src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>"></script>

<div class="content">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Data Train</h5>
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
                foreach ($data_set_data as $data_set)
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
						<td><?php echo $data_set->kemiringan_lereng ?></td>
						<td><?php echo $data_set->kondisi_tanah ?></td>
						<td><?php echo $data_set->batuan_penyusun_lereng ?></td>
						<td><?php echo $data_set->curah_hujan ?></td>
						<td><?php echo $data_set->tata_air_lereng ?></td>
						<td><?php echo $data_set->vegetasi ?></td>
						<td><?php echo $data_set->pola_tanam ?></td>
						<td><?php echo $data_set->penggalian_dan_pemotongan_lereng ?></td>
						<td><?php echo $data_set->pencetakan_kolam ?></td>
						<td><?php echo $data_set->drainase ?></td>
						<td><?php echo $data_set->pembangunan_konstruksi ?></td>
						<td><?php echo $data_set->kepadatan_penduduk ?></td>
						<td><?php echo $data_set->usaha_mitigasi ?></td>
						<td><?php echo $data_set->hasil ?></td>
						<td style="text-align:center" width="200px">
						<?php 
							echo anchor(site_url('data_set/read/'.$data_set->id_data_set),'Detail'); 
							echo ' | '; 
							echo anchor(site_url('data_set/update/'.$data_set->id_data_set),'Update'); 
							echo ' | '; 
							echo anchor(site_url('data_set/delete/'.$data_set->id_data_set),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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


<script type="text/javascript">
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