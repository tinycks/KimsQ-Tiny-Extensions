<div id="mjointbox">

    <?php if ($isWcode != 'Y'):?>
    <div class="none">
    <img src="<?php echo $g['img_core']?>/_public/ico_notice.gif" alt="" />
    이 위젯은 위젯 추가를 지원하지 않습니다. 위젯코드 추출방식으로 하드코딩 하십시오.
    </div>
    <?php else: ?>
        
    <div class="title">
        이 위젯(<span class="b"><?php echo getFolderName($g['path_widget'].$swidget)?></span>)을 추가하시겠습니까?
    </div>

    <form action="<?php echo $g['s']?>/" method="get">
    <input type="hidden" name="r" value="<?php echo $r?>" />
    <input type="hidden" name="system" value="<?php echo $system?>" />
    <input type="hidden" name="iframe" value="<?php echo $iframe?>" />
    <input type="hidden" name="pwd" value="<?php echo $pwd?>" />
    <input type="hidden" name="dropfield" value="<?php echo $dropfield?>" />
    <input type="hidden" name="option" value="<?php echo $option?>" />
    <input type="hidden" name="isWcode" value="<?php echo $isWcode?>" />
    <table>
    <tr>
    <td class="td1">패밀리사이트 수</td>
    <td class="td2">:</td>
    <td class="td3">
    <select name="tabnum" onchange="this.form.submit();">
    <?php $tabnum = $tabnum ? $tabnum : 1?>
    <?php for($i = 1; $i < 100; $i++):?>
    <option value="<?php echo $i?>"<?php if($tabnum==$i):?> selected="selected"<?php endif?>><?php echo $i?>개</option>
    <?php endfor?>
    </select>
    </td>
    </tr>
    </table>
    </form>

    <form name="procform">
    <input type="hidden" name="tabnum" value="<?php echo $tabnum?>" />

    <table>

    <tr>
    <td class="td1">타이틀</td>
    <td class="td2">:</td>
    <td class="td3"><input type="text" name="title" value="패밀리사이트" size="36" class="input" maxlength="9" /></td>
    </tr>
    
    <tr>
    <td class="td1">정렬 및 표시</td>
    <td class="td2">:</td>
    <td class="td3">
        좌/우
        <select name="rl">
        <option value="familysite_right" selected="selected">오른쪽 정렬</option>
        <option value="familysite_left">왼쪽 정렬</option>
        </select>

        상/하
        <select name="tb">
        <option value="familysite_top" selected="selected">위로 표시</option>
        <option value="familysite_bottom">아래로 표시</option>
        </select>        
    </td>
    </tr>

    <?php for($i = 1; $i <= $tabnum; $i++):?>
    <tr><td colspan="3" class="td5"></td></tr>
    <tr>
    <td class="td1">[<?php echo $i?>] 타이틀</td>
    <td class="td2">:</td>
    <td class="td3"><input type="text" name="title<?php echo $i?>" value="링크 이름" size="36" class="input" /></td>
    </tr>
    <tr>
    <td class="td1">[<?php echo $i?>] 링크 Url</td>
    <td class="td2">:</td>
    <td class="td3"><input type="text" name="link<?php echo $i?>" value="http://" size="36" class="input" /></td>
    </tr>
    <tr>
    <td class="td1">[<?php echo $i?>] 타겟</td>
    <td class="td2">:</td>
    <td class="td3">
        <select name="target<?php echo $i?>">
        <option value="_blank" selected="selected">새창(_blank)</option>
        <option value="_self">현재창(_self)</option>
        </select>
    </td>
    </tr>
    <?php endfor?>
    </table>
    
    <div class="btnbox">
    <input type="button" value="미리보기" class="btngray" onclick="imgOrignWin('<?php echo $g['url_root']?>/widgets/<?php echo $swidget?>/thumb.png');" />
    <input type="button" value="위젯코드" class="btnblue" onclick="widgetCode();" />
    </div>
    <div class="info">
        이 위젯(<span class="b"><?php echo getFolderName($g['path_widget'].$swidget)?></span>)은 한 화면에 하나만 출력이 가능합니다!
    </div>
    </form>
    
    <?php endif ?>

</div>


<style type="text/css">
#mjointbox {}
#mjointbox .title {border-bottom:#dfdfdf dashed 1px;padding:0 0 10px 0;margin:0 0 20px 0;}
#mjointbox .info {padding:10px 0 0 0;margin:10px 0 0 0; color:red;}
#mjointbox .td1 {padding:0;letter-spacing:-1px;width:80px;}
#mjointbox .td2 {padding:0 15px 0 0;color:#c0c0c0;}
#mjointbox .td3 {}
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
    var familysite;
    var widgetName = "<?php echo $swidget?>";
    var widgetInfo = "";

    var tablen = parseInt(f.tabnum.value);
    for (i = 1; i <= tablen; i++)
    {
        if(eval("f.title"+i).value) widgetInfo+= "'title"+i+"'=>'"+eval("f.title"+i).value+"',";
        if(eval("f.link"+i).value) widgetInfo+= "'link"+i+"'=>'"+eval("f.link"+i).value+"',";
        if(eval("f.target"+i).value) widgetInfo+= "'target"+i+"'=>'"+eval("f.target"+i).value+"',";
    }
    if(f.title.value) widgetInfo+= "'title'=>'"+f.title.value+"',";
    if(f.rl.value) widgetInfo+= "'rl'=>'"+f.rl.value+"',";
    if(f.tb.value) widgetInfo+= "'tb'=>'"+f.tb.value+"',";
    if(f.tabnum.value) widgetInfo+= "'tabnum'=>'"+tablen+"',";

    RB_widgetCode = "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>";
    OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.widgetcode&iframe=Y');
}
        //]]>
</script>

