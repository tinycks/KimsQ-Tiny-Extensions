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



    <div class="btnbox">
    <input type="button" value="미리보기" class="btngray" onclick="imgOrignWin('<?php echo $g['url_root']?>/widgets/<?php echo $swidget?>/thumb.png');" />
    <input type="button" value="위젯코드" class="btnblue" onclick="widgetCode();" />
    </div>

    <?php endif ?>

</div>


<style type="text/css">
    #mjointbox {
    }
    #mjointbox .preview {
        width: 200px;
    }
    #mjointbox .wg {
        text-align: center;
    }
    #mjointbox .title {
        border-bottom: #dfdfdf dashed 1px;
        padding: 0 0 10px 0;
        margin: 0 0 20px 0;
    }
    #mjointbox .btnbox {
        width: 200px;
        padding: 20px 0 0 0;
    }
</style>



<script type="text/javascript">
    //<![CDATA[
var RB_widgetCode;
function widgetCode()
{
    var f = document.procform;
    var widgetName = "<?php echo $swidget?>";
        var widgetInfo = "";

        RB_widgetCode = "<"+"?php "+"getWidget('"+widgetName+"',array("+widgetInfo+"))?>";
        OpenWindow('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.widgetcode&iframe=Y');
        }
        //]]>
</script>

