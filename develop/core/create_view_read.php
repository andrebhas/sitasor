<?php 

$string = "<?php 
    \$ci =& get_instance();
?>

<div class=\"content\">

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">".ucfirst($table_name)." Detail</h5>
            <div class=\"heading-elements\">
                <ul class=\"icons-list\">
                    <li><a data-action=\"collapse\"></a></li>
                </ul>
            </div>
        </div>

        <div class=\"panel-body\"> 
        
            <table class=\"table\">";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t\t<tr>
                    <td>".label($row["column_name"])."</td><td><?php echo $".$row["column_name"]."; ?></td>
                </tr>";
}
$string .= "\n\t\t\t\t<tr>
                    <td><a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-primary\">Back</a></td><td></td>
                </tr>";
$string .= "\n\t\t\t</table>
       
       </div>

    </div>
</div>";



$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);

?>