<?php
/**
 * @author Tiny(타이니)
 */
?>
<div id="mjointbox">

    <?php if ($isWcode != 'Y'):?>
    <div class="none">
    <img src="<?php echo $g['img_core']?>/_public/ico_notice.gif" alt="" />
    이 위젯은 위젯 추가를 지원하지 않습니다. 위젯코드 추출방식으로 하드코딩 하십시오.
    </div>
    <?php else:?>
        
	<div class="title">
		이 위젯 (<span class="b"><?php echo getFolderName($g['path_widget'].$swidget)?></span>)을 추가하시겠습니까?
	</div>

	<form name="procform" onsubmit="return saveCheck(this);">

	<table>
    <tr>
    <td class="td1"><img src="<?php echo $pwd;?>/image/button-print-blu20.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="button-print-blu20" class="input" checked="checked" /></td>
 
    <td class="td1"><img src="<?php echo $pwd;?>/image/button-print-grnw20.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="button-print-grnw20" class="input" /></td>
     </tr>
    <tr>
    <td class="td1"><img src="<?php echo $pwd;?>/image/button-print-gry20.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="button-print-gry20" class="input" /></td>
 
    <td class="td1"><img src="<?php echo $pwd;?>/image/button-print-whgn20.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="button-print-whgn20" class="input" /></td>
     </tr>
    <tr>
    <td class="td1"><img src="<?php echo $pwd;?>/image/pf_button_sq_grn_l.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="pf_button_sq_grn_l" class="input" /></td>

    <td class="td1"><img src="<?php echo $pwd;?>/image/pf_button_sq_grn_m.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="pf_button_sq_grn_m" class="input" /></td>
    </tr>
    <tr>
    <td class="td1"><img src="<?php echo $pwd;?>/image/pf_button_sq_gry_l.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="pf_button_sq_gry_l" class="input" /></td>

    <td class="td1"><img src="<?php echo $pwd;?>/image/pf_button_sq_gry_m.png" /></td>
    <td class="td2">:</td>
    <td class="td3"><input type="radio" name="png" value="pf_button_sq_gry_m" class="input" /></td>
    </tr>

	</table>
	
	<div class="btnbox">
	<input type="button" value="위젯코드" class="btnblue" onclick="widgetCode();" />
	</div>
	</form>

    <?php endif?>

</div>

<style type="text/css">
#mjointbox {}
#mjointbox .title {border-bottom:#dfdfdf dashed 1px;padding:0 0 10px 0;margin:0 0 20px 0;}
#mjointbox .td1 {padding:0 10px 10px 0;letter-spacing:-1px;}
#mjointbox .td2 {padding:0 10px 0 0;color:#c0c0c0;}
#mjointbox .td3 {padding:0 100px 0 0;}
#mjointbox .btnbox {text-align:center;padding:20px 0 0 0;margin:20px 0 0 0;border-top:#dfdfdf dashed 1px;}
</style>


<script type="text/javascript">
//<![CDATA[
var RB_widgetCode;
function widgetCode()
{
	var f = document.procform;

	var widgetName = "<?php echo $swidget?>";
	var widgetInfo = "";

                for(var i = 0; i < f.png.length; i++) {
                    if(f.png[i].checked == true) {
                        pngvalue = f.png[i].value ;
                    }
                }
                    
	widgetInfo+= "'png'=>'"+pngvalue+"',";

	RB_widgetCode = "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>";
	OpenWindow('./?system=popup.widgetcode&iframe=Y');
}
//]]>
</script>

