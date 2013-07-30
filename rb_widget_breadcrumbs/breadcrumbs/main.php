<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery.fn.jBreadCrumb.defaults.previewWidth = '25';
        jQuery.fn.jBreadCrumb.defaults.minimumCompressionElements = '3';
        jQuery("#breadCrumb_widget").jBreadCrumb();
    })
</script>

<div class="breadCrumbHolder module">
    <div id="breadCrumb_widget" class="breadCrumb module">
        <ul>
            <?php
$location = explode("&gt;", $g['location']);
foreach($location as $here) {
            ?>
            <li>
                <?php echo $here
                ?>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>