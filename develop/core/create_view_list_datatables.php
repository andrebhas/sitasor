<?php 

$string = "<?php 
    \$ci =& get_instance();
?>

<script src=\"<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>\"></script>
<script src=\"<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>\"></script>

<div class=\"content\">

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">".ucfirst($table_name)." List</h5>
            <div class=\"heading-elements\">
                <ul class=\"icons-list\">
                    <li><a data-action=\"collapse\"></a></li>
                </ul>
            </div>
        </div>

        <div class=\"panel-body\"> 
            <div class=\"row\">
                <div class=\"col-md-5 text-left\">
                    <?php echo anchor(site_url('".$c_url."/create'), '<i class=\"fa fa-plus-square\"></i> Tambah', 'class=\"btn btn-default btn-xs\" data-popup=\"tooltip-custom\" title=\"tambah data\"'); ?>";
        if ($export_excel == '1') {
            $string .= "\n\t\t\t\t\t<?php echo anchor(site_url('".$c_url."/excel'), '<i class=\"fa fa-file-excel-o\"></i>', 'class=\"btn btn-success btn-xs\" data-popup=\"tooltip-custom\" title=\"export ms.excel\"'); ?>";
        }
        if ($export_word == '1') {
            $string .= "\n\t\t\t\t\t<?php echo anchor(site_url('".$c_url."/word'), '<i class=\"fa fa-file-word-o\"></i>', 'class=\"btn btn-primary btn-xs\"  data-popup=\"tooltip-custom\" title=\"export ms.word\"'); ?>";
        }
        if ($export_pdf == '1') {
            $string .= "\n\t\t\t\t\t<?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
        }
        $string .= "\n\t\t\t\t</div>
                <div class=\"col-md-7 text-center\">
                    <div style=\"margin-top: 4px\"  id=\"message\">
                        <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
                    </div>
                </div>
            </div>          
            <br>
            <table class=\"table datatable-responsive table-sm table-striped\" id=\"mytable\">
                <thead>
                    <tr>
                        <th width=\"50px\">No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t\t\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t\t\t\t\t<th>Action</th>
                    </tr>
                </thead>";
$string .= "\n\t\t\t\t<tbody>
            <?php
                \$start = 0;
                foreach ($" . $c_url . "_data as \$$c_url)
                {
            ?>
                    <tr>";

$string .= "\n\t\t\t\t\t\t<td><?php echo ++\$start ?></td>";

foreach ($non_pk as $row) {
    $string .= "\n\t\t\t\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}

$string .= "\n\t\t\t\t\t\t<td style=\"text-align:center\" width=\"200px\">"
        . "\n\t\t\t\t\t\t<?php "
        . "\n\t\t\t\t\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'Detail'); "
        . "\n\t\t\t\t\t\t\techo ' | '; "
        . "\n\t\t\t\t\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'Update'); "
        . "\n\t\t\t\t\t\t\techo ' | '; "
        . "\n\t\t\t\t\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'Delete','onclick=\"javasciprt: return confirm(\\'Are You Sure ?\\')\"'); "
        . "\n\t\t\t\t\t\t?>"
        . "\n\t\t\t\t\t\t</td>";

$string .=  "\n\t\t\t\t\t</tr>
            <?php
                }
            ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


<script type=\"text/javascript\">
$(function() {

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 5 ]
        }],
        dom: '<\"datatable-header\"fl><\"datatable-scroll-wrap\"t><\"datatable-footer\"ip>',
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
        minimumResultsForSearch: \"-1\"
    });
    
});
</script>";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>