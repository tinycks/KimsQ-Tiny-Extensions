
<div id="mjointbox">

	<div class="title">
		이 위젯(<span class="b"><?php echo getFolderName($g['path_widget'].$swidget)?></span>)을 추가하시겠습니까?
	</div>


	<form name="procform" onsubmit="return saveCheck(this);">

	<table>
	<tr>
	<td class="td1">카운터 타이틀</td>
	<td class="td2">:</td>
	<td class="td3">
		<input type="text" name="title" value="<?php echo $wdgvar['title']?$wdgvar['title']:'Visits Counter'?>" size="24" class="input" />
		<input type="checkbox" name="notuse" value="1"<?php if($wdgvar['notuse']):?> checked="checked"<?php endif?> />사용안함
	</td>
	</tr>
    <tr>
    <td class="td1">오늘 방문</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="visits1" value="1"<?php if($wdgvar['visits1']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>
    <tr>
    <td class="td1">어제 방문</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="visits2" value="1"<?php if($wdgvar['visits2']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>
    <tr>
    <td class="td1">오늘 페이지뷰</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="views1" value="1"<?php if($wdgvar['views1']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>
    <tr>
    <td class="td1">어제 페이지뷰</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="views2" value="1"<?php if($wdgvar['views2']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>
    <tr>
    <td class="td1">이번달 방문</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="month1" value="1"<?php if($wdgvar['month1']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>
    <tr>
    <td class="td1">지난달 방문</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="month2" value="1"<?php if($wdgvar['month2']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>
    <tr>
    <td class="td1">오늘 회원가입</td>
    <td class="td2">:</td>
    <td class="td3">
    <label><input type="checkbox" name="join" value="1"<?php if($wdgvar['join']):?> checked="checked"<?php endif?> />표시안함</label>
    </td>
    </tr>           
	</table>

	<div class="btnbox">
	<input type="button" value="미리보기" class="btngray" onclick="imgOrignWin('<?php echo $g['url_root']?>/widgets/<?php echo $swidget?>/thumb.png');" />
	<?php if ($isWcode == 'Y'):?>
	<input type="button" value="위젯코드" class="btnblue" onclick="widgetCode();" />
	<?php else :?>
	<input type="submit" value="<?php echo $option?'속성변경':'위젯추가'?>" class="btnblue" />
	<?php endif?>
	</div>

	</form>


</div>

<style type="text/css">
#mjointbox {}
#mjointbox .title {border-bottom:#dfdfdf dashed 1px;padding:0 0 10px 0;margin:0 0 20px 0;}
#mjointbox .td1 {padding:0;letter-spacing:-1px;width:80px;}
#mjointbox .td2 {padding:0 15px 0 0;color:#c0c0c0;}
#mjointbox .td3 {}
#mjointbox .td3 select {width:230px;}
#mjointbox .td4 {padding:10px 0 0 0;color:#999;line-height:150%;}
#mjointbox .td5 {height:10px;}
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

	if(f.title.value) widgetInfo+= "'title'=>'"+f.title.value+"',";
    if(f.notuse.checked == true) widgetInfo+= "'notuse'=>'1',";
    if(f.visits1.checked == true) widgetInfo+= "'visits1'=>'1',";
    if(f.visits2.checked == true) widgetInfo+= "'visits2'=>'1',";
    if(f.views1.checked == true) widgetInfo+= "'views1'=>'1',";
    if(f.views2.checked == true) widgetInfo+= "'views2'=>'1',";
    if(f.month1.checked == true) widgetInfo+= "'month1'=>'1',";
    if(f.month2.checked == true) widgetInfo+= "'month2'=>'1',";
    if(f.join.checked == true) widgetInfo+= "'join'=>'1',";

	RB_widgetCode = "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>";
	OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.widgetcode&iframe=Y');
}
function saveCheck(f)
{
	<?php if(!$option):?>
	var i;
	var n = 0;

    for (i=0; i<opener.maxTiles; i++)
	{
        if (opener.moveObject[i].style.display=='block')
		{
			n = i+1;
        }
    }
	<?php else:?>
	var n = <?php echo $dropfield?>;
	<?php endif?>

	<?php if(!$option):?>
	opener.createTile('200px','190px','0px','0px');
	<?php endif?>

	opener.blocktitle[n] = '방문자카운터';
	opener.blockarray[n] = "<?php echo $swidget?>,title^"+f.title.value+",notuse^"+(f.notuse.checked==true?'1':'')+",visits1^"+(f.visits1.checked==true?'1':'')+",visits2^"+(f.visits2.checked==true?'1':'')+",views1^"+(f.views1.checked==true?'1':'')+",views2^"+(f.views2.checked==true?'1':'')+",month1^"+(f.month1.checked==true?'1':'')+",month2^"+(f.month2.checked==true?'1':'')+",join^"+(f.join.checked==true?'1':'');
	opener.getId('wtitle'+n).innerHTML = opener.blocktitle[n];
	top.close();
	return false;
}
//]]>
</script>

