<div class="guide">
    <span class="b">레이아웃에 기본 포함된 Contact Us 추가 페이지를 쉽게 메뉴로 추가하실 수 있습니다.</span>
    <br />
    <br />
    상단 대메뉴에 Contact Us 추가페이지 링크를 추가하세요. 메뉴명 수정을 지원합니다.
    <br />
    Contact Form 을 통해 보내진 내용은 지정한 관리자에게 쪽지로 발송됩니다.
    <br />
    약도는 이미지/플래쉬 형태로 직접 제작해 업로드 하시거나 네이버/다음/구글 지도 사이트의 지도 공유 서비스의 HTML 코드를 활용하십시오.
    <br />
    스팸방지 캡차를 기본 포함합니다. captcha (Completely Automated Public Test to tell Computers and Humans Apart)
    <br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck4(this);">
    <input type="hidden" name="r" value="<?php echo $r?>" />
    <input type="hidden" name="_layoutAction" value="config" />
    <input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
    <input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

    <table>

        <tr>
            <td class="t1">메뉴에 노출</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="contactus_use" value="1"<?php if($d['layout']['contactus_use']=='1'):?> checked="checked"<?php endif ?> />
                메뉴에 노출함</label><label>
                <input type="radio" name="contactus_use" value="0"<?php if($d['layout']['contactus_use']=='0'):?> checked="checked"<?php endif ?> />
                메뉴에 노출안함</label></td>
        </tr>

        <tr>
            <td class="t1">메뉴 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="contactus_name" class="input" value="<?php echo $d['layout']['contactus_name']?>" />
            </td>
        </tr>

        <tr>
            <td class="t1">쪽지 받을 아이디</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="contactus_user" class="input" value="<?php echo $d['layout']['contactus_user']?>" /> <span class="small">(관리자가 아니어도 됩니다.)</span>
            </td>
        </tr>

        <tr>
            <td class="t1">지도의 형식</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="contactus_map" value="0"<?php if($d['layout']['contactus_map']=='0'):?> checked="checked"<?php endif ?> />
                지도 노출안함</label><label>
                <input type="radio" name="contactus_map" value="1"<?php if($d['layout']['contactus_map']=='1'):?> checked="checked"<?php endif ?> />
                이미지</label><label>
                <input type="radio" name="contactus_map" value="2"<?php if($d['layout']['contactus_map']=='2'):?> checked="checked"<?php endif ?> />
                플래쉬</label><label>
                <input type="radio" name="contactus_map" value="3"<?php if($d['layout']['contactus_map']=='3'):?> checked="checked"<?php endif ?> />
                HTML/스크립트</label></td>
        </tr>

        <tr>
            <td class="t1">지도 이미지</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile1" class="file" value="" />
            </td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['contactus_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['contactus_img']?>" width=300 alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=contactus_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">지도 플래쉬</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile11" class="file" value="" />
            </td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['contactus_swf'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <embed src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['contactus_swf']?>" width=300></embed>
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=contactus_swf&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 플래쉬 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>

        <tr>
            <td class="t1">지도 HTML</td>
            <td class="t2">:</td>
            <td class="t3">            <textarea name="contactus1code" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_contactus1.txt')?></textarea></td>
        </tr>

        <tr>
            <td class="t1">기타 표시 HTML</td>
            <td class="t2">:</td>
            <td class="t3">            <textarea name="contactus2code" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_contactus2.txt')?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
            <br />
            <br />
            <input type="submit" value=" 변경하기 " class="button" />
            </td>
        </tr>
    </table>

</form>