<?php
/**
 * @author Tiny(타이니)
 */

 $g['img_widget'] = $g['s'].'/widgets/'.$wdgvar['widget_id'].'/image';
?>
<script src="http://cdn.printfriendly.com/printfriendly.js" type="text/javascript"></script>
<a href="http://www.printfriendly.com" style=" color:#6D9F00; text-decoration:none;" class="printfriendly" onclick="window.print(); return false;" title="Print Friendly and PDF"><img style="border:none;" src="<?php echo $g['img_widget']?>/<?php echo $wdgvar['png']?>.png" alt="Print Friendly and PDF"/></a>