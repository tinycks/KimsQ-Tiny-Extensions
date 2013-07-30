
<div id="mjointbox">

    <div class="title">
        이 위젯(<span class="b"><?php echo getFolderName($g['path_widget'].$swidget)?></span>)을 추가하시겠습니까?
    </div>


    <form name="procform" onsubmit="return saveCheck(this);">

    <table>
    <tr>
    <td class="td1">D-Day 연도</td>
    <td class="td2">:</td>
    <td class="td3">
        <input type="text" name="cd_y" value="<?php echo $wdgvar['cd_y']?$wdgvar['cd_y']:date('Y')?>" size="4" class="input" />년
    </td>
    </tr>
    <tr>
    <td class="td1">D-Day 월</td>
    <td class="td2">:</td>
    <td class="td3">
        <input type="text" name="cd_m" value="<?php echo $wdgvar['cd_m']?$wdgvar['cd_m']:date('m')?>" size="2" class="input" />월
    </td>
    </tr>
    <tr>
    <td class="td1">D-Day 일</td>
    <td class="td2">:</td>
    <td class="td3">
        <input type="text" name="cd_d" value="<?php echo $wdgvar['cd_d']?$wdgvar['cd_d']:date('d')?>" size="2" class="input" />일
    </td>
    </tr>
    <tr>
    <td class="td1">D-Day 시</td>
    <td class="td2">:</td>
    <td class="td3">
        <input type="text" name="cd_h" value="<?php echo $wdgvar['cd_h']?$wdgvar['cd_h']:'0'?>" size="2" class="input" />시 (0~23)
    </td>
    </tr>
    <tr>
    <td class="td1">D-Day 분</td>
    <td class="td2">:</td>
    <td class="td3">
        <input type="text" name="cd_i" value="<?php echo $wdgvar['cd_i']?$wdgvar['cd_i']:'0'?>" size="2" class="input" />분
    </td>
    </tr>
    <tr>
    <td class="td1">D-Day 초</td>
    <td class="td2">:</td>
    <td class="td3">
        <input type="text" name="cd_s" value="<?php echo $wdgvar['cd_s']?$wdgvar['cd_s']:'1'?>" size="2" class="input" />초
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
    
    widgetInfo+= "'cd_id'=>'<?php echo round(microtime(true))?>',";

    if(f.cd_y.value) widgetInfo+= "'cd_y'=>'"+f.cd_y.value+"',";
    if(f.cd_m.value) widgetInfo+= "'cd_m'=>'"+f.cd_m.value+"',";
    if(f.cd_d.value) widgetInfo+= "'cd_d'=>'"+f.cd_d.value+"',";
    if(f.cd_h.value) widgetInfo+= "'cd_h'=>'"+f.cd_h.value+"',";
    if(f.cd_i.value) widgetInfo+= "'cd_i'=>'"+f.cd_i.value+"',";
    if(f.cd_s.value) widgetInfo+= "'cd_s'=>'"+f.cd_s.value+"',";

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
    opener.createTile('450px','90px','0px','0px');
    <?php endif?>

    opener.blocktitle[n] = '카운트다운';
    opener.blockarray[n] = "<?php echo $swidget?>,cd_id^"+'<?php echo round(microtime(true))?>'+",cd_y^"+f.cd_y.value+",cd_m^"+f.cd_m.value+",cd_d^"+f.cd_d.value+",cd_h^"+f.cd_h.value+",cd_i^"+f.cd_i.value+",cd_s^"+f.cd_s.value;
    opener.getId('wtitle'+n).innerHTML = opener.blocktitle[n];
    top.close();
    return false;
}
//]]>
</script>

