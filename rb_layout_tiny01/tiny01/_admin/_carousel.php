<div class="guide">
    <span class="b">홈페이지 메인 캐러셀(carousel) 광고를 간단하게 제어하실 수 있습니다.</span>
    <br />
    <br />
    이미지의 사이즈는 가로 600px 세로 300px로 고정되니 정확한 크기로 마련해 주십시오.
    <br />
    최소 3개의 광고가 존재해야 구동이 가능합니다. 따라서 메인화면 설정에서 출력하기로 하셨다면 최소 3개의 이미지를 준비하세요.
    <br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck3(this);">
    <input type="hidden" name="r" value="<?php echo $r?>" />
    <input type="hidden" name="_layoutAction" value="config" />
    <input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
    <input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

    <span class="b">메인 캐러셀(carousel) 1</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">노출여부</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="carousel1type" value="1" checked="checked" />
                노출함</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile1" class="file" value="" />
            /
            <input type="text" name="carousel1_link" class="input" value="<?php echo $d['layout']['carousel1_link']?>" />
            <select name="carousel1_target">
                <option value="_blank"<?php if($d['layout']['carousel1_target']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['carousel1_target']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['carousel1_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['carousel1_img']?>?<?php echo $date['totime']?>" width="600" height="300" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=carousel1_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">우측하단 표시 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="carousel1_txt" class="inputbig" value="<?php echo $d['layout']['carousel1_txt']?>" />
            </td>
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

    <div class="guide"></div>

    <span class="b">메인 캐러셀(carousel) 2</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">노출여부</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="carousel2type" value="1" checked="checked" />
                노출함</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile2" class="file" value="" />
            /
            <input type="text" name="carousel2_link" class="input" value="<?php echo $d['layout']['carousel2_link']?>" />
            <select name="carousel2_target">
                <option value="_blank"<?php if($d['layout']['carousel2_target']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['carousel2_target']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['carousel2_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['carousel2_img']?>?<?php echo $date['totime']?>" width="600" height="300" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=carousel2_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">우측하단 표시 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="carousel2_txt" class="inputbig" value="<?php echo $d['layout']['carousel2_txt']?>" />
            </td>
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

    <div class="guide"></div>

    <span class="b">메인 캐러셀(carousel) 3</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">노출여부</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="carousel3type" value="1" checked="checked" />
                노출함</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile3" class="file" value="" />
            /
            <input type="text" name="carousel3_link" class="input" value="<?php echo $d['layout']['carousel3_link']?>" />
            <select name="carousel3_target">
                <option value="_blank"<?php if($d['layout']['carousel3_target']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['carousel3_target']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['carousel3_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['carousel3_img']?>?<?php echo $date['totime']?>" width="600" height="300" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=carousel3_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">우측하단 표시 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="carousel3_txt" class="inputbig" value="<?php echo $d['layout']['carousel3_txt']?>" />
            </td>
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

    <div class="guide"></div>

    <span class="b">메인 캐러셀(carousel) 4</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">노출여부</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="carousel4type" value="0"<?php if($d['layout']['carousel4type']=='0'):?> checked="checked"<?php endif ?> />
                노출안함</label><label>
                <input type="radio" name="carousel4type" value="1"<?php if($d['layout']['carousel4type']=='1'):?> checked="checked"<?php endif ?> />
                노출함</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile4" class="file" value="" />
            /
            <input type="text" name="carousel4_link" class="input" value="<?php echo $d['layout']['carousel4_link']?>" />
            <select name="carousel4_target">
                <option value="_blank"<?php if($d['layout']['carousel4_target']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['carousel4_target']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['carousel4_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['carousel4_img']?>?<?php echo $date['totime']?>" width="600" height="300" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=carousel4_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">우측하단 표시 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="carousel4_txt" class="inputbig" value="<?php echo $d['layout']['carousel4_txt']?>" />
            </td>
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

    <div class="guide"></div>

    <span class="b">메인 캐러셀(carousel) 5</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">노출여부</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="carousel5type" value="0"<?php if($d['layout']['carousel5type']=='0'):?> checked="checked"<?php endif ?> />
                노출안함</label><label>
                <input type="radio" name="carousel5type" value="1"<?php if($d['layout']['carousel5type']=='1'):?> checked="checked"<?php endif ?> />
                노출함</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile5" class="file" value="" />
            /
            <input type="text" name="carousel5_link" class="input" value="<?php echo $d['layout']['carousel5_link']?>" />
            <select name="carousel5_target">
                <option value="_blank"<?php if($d['layout']['carousel5_target']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['carousel5_target']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['carousel5_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['carousel5_img']?>?<?php echo $date['totime']?>" width="600" height="300" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=carousel5_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">우측하단 표시 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="carousel5_txt" class="inputbig" value="<?php echo $d['layout']['carousel5_txt']?>" />
            </td>
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

    <div class="guide"></div>

    <span class="b">메인 캐러셀(carousel) 6</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">노출여부</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="carousel6type" value="0"<?php if($d['layout']['carousel6type']=='0'):?> checked="checked"<?php endif ?> />
                노출안함</label><label>
                <input type="radio" name="carousel6type" value="1"<?php if($d['layout']['carousel6type']=='1'):?> checked="checked"<?php endif ?> />
                노출함</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile6" class="file" value="" />
            /
            <input type="text" name="carousel6_link" class="input" value="<?php echo $d['layout']['carousel6_link']?>" />
            <select name="carousel6_target">
                <option value="_blank"<?php if($d['layout']['carousel6_target']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['carousel6_target']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['carousel6_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['carousel6_img']?>?<?php echo $date['totime']?>" width="600" height="300" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=carousel6_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">우측하단 표시 텍스트</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="carousel6_txt" class="inputbig" value="<?php echo $d['layout']['carousel6_txt']?>" />
            </td>
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
