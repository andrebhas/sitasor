<?php 

$string = "<?php 
    \$ci =& get_instance();;
?>

<div class=\"content\">

    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">Form <?php echo \$button ?> ".ucfirst($table_name)."</h5>
            <div class=\"heading-elements\">
                <ul class=\"icons-list\">
                    <li><a data-action=\"collapse\"></a></li>
                </ul>
            </div>
        </div>

        <div class=\"panel-body\"> 

            <form action=\"<?php echo \$action; ?>\" method=\"post\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text')
    {
    $string .= "\n\t\t\t\t<div class=\"form-group\">
                    <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
                </div>";
    } else
    {
    $string .= "\n\t\t\t\t<div class=\"form-group\">
                    <label for=\"".$row["data_type"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
                    <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                </div>";
    }
}
$string .= "\n\t\t\t\t<input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t\t\t\t<button type=\"submit\" class=\"btn btn-success\"><?php echo \$button ?></button> ";
$string .= "\n\t\t\t\t<a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t\t\t</form>
        
        </div>
    </div>
</div>";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>